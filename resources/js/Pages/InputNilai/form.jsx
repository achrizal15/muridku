import InputError from "@/Components/InputError"
import PrimaryButton from "@/Components/PrimaryButton"
import Authenticated from "@/Layouts/AuthenticatedLayout"
import { Transition } from "@headlessui/react"
import { Head, useForm } from "@inertiajs/inertia-react"
import { Label, Table ,Alert} from "flowbite-react"
import Select from 'react-select';
const Form = ({ auth,flash, kelas, tahunAjaran, mataPelajaran, }) => {
    const { data, setData, post,  errors, recentlySuccessful } = useForm({
        kelas_id: "",
        tahun_ajaran_id: "",
        mata_pelajaran_id: "",
        semester: "",
        nilai: []
    })
    const handleSubmit = (e) => {
        e.preventDefault();
        post(route("transaksi.input-nilai.store"))
    }

    const fetchSiswa = async () => {
        if (data.kelas_id == "" || data.tahun_ajaran_id == "") return false
        const query = `?kelas=${data.kelas_id}&thn=${data.tahun_ajaran_id}`
        // console.log(2)
        const res = await fetch(`${route('transaksi.input-nilai.getSiswa')}${query}`).then(res => res.json())
        const nilai = res.map(e => ({
            id: e.id,
            name: e.name,
            nis: e.nis,
            uts: 0,
            tugas: 0,
            uas: 0
        }))
        setData("nilai", nilai)
    }
    return (
        <Authenticated auth={auth} header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Siswa Form</h2>}
        >
            <Head title="Siswa Form" />
            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div className="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        {flash.message && (
                                <Alert
                                    className='mt-4'
                                    color="success"
                                >
                                    <span>

                                        {flash.message}
                                    </span>
                                </Alert>
                            )}
                        <form className="mt-6 space-y-6" onSubmit={handleSubmit}>
                            <div className="grid grid-cols-2 gap-4">

                                <div>
                                    <Label
                                        htmlFor="kelas" value="Kelas" />
                                    <Select
                                        className="basic-single"
                                        classNamePrefix="select"
                                        isSearchable={true}
                                        name="kelas_id"
                                        onChange={(e) => {
                                            setData({kelas_id:e.value,tahun_ajaran_id:data.tahun_ajaran_id,semester:data.semester,mata_pelajaran_id:data.mata_pelajaran_id,nilai:[]})
                                        }}
                                        options={[...kelas.map((item) => ({ label: item.name, value: item.id }))]}
                                    />
                                    <InputError className="mt-2" message={errors.kelas_id} />
                                </div>
                                <div>
                                    <Label
                                        htmlFor="tahun_ajaran_id" value="Tahun Ajaran" />
                                    <Select
                                        className="basic-single"
                                        classNamePrefix="select"
                                        isSearchable={true}
                                        name="tahun_ajaran_id"
                                        onChange={(e) => {
                                            setData({kelas_id:data.kelas_id,tahun_ajaran_id:e.value,semester:data.semester,mata_pelajaran_id:data.mata_pelajaran_id,nilai:[]})
                                        }}
                                        options={[...tahunAjaran.map((item) => ({ label: item.name, value: item.id }))]}
                                    />
                                    <InputError className="mt-2" message={errors.tahun_ajaran_id} />
                                </div>
                                <div>
                                    <Label
                                        htmlFor="mata_pelajaran_id" value="Mata Pelajaran" />
                                    <Select
                                        className="basic-single"
                                        classNamePrefix="select"
                                        isSearchable={true}
                                        name="mata_pelajaran_id"
                                        onChange={(e) => setData("mata_pelajaran_id", e.value)}
                                        options={[...mataPelajaran.map((item) => ({ label: item.name, value: item.id }))]}
                                    />
                                    <InputError className="mt-2" message={errors.mata_pelajaran_id} />
                                </div>
                                <div>
                                    <Label
                                        htmlFor="semester" value="Mata Pelajaran" />
                                    <Select
                                        className="basic-single"
                                        classNamePrefix="select"
                                        isSearchable={true}
                                        name="semester"
                                        onChange={(e) => setData("semester", e.value)}
                                        options={[{ label: "Semester 1", value: "Semester 1" },
                                        { label: "Semester 2", value: "Semester 2" }]}
                                    />
                                    <InputError className="mt-2" message={errors.mata_pelajaran_id} />
                                </div>

                            </div>
                            <section className="max-w-xl">
                                <div className="flex items-center gap-4">
                                    <PrimaryButton type="button" onClick={() => fetchSiswa()}>Search Siswa</PrimaryButton>
                                    <p className="text-sm text-gray-600">Pastikan kelas dan tahun ajaran telah dipilih.</p>
                                </div>

                                <Table className="mt-4"><Table.Head>
                                    <Table.HeadCell>
                                        Nis
                                    </Table.HeadCell>
                                    <Table.HeadCell>
                                        Name
                                    </Table.HeadCell>
                                    <Table.HeadCell>
                                        Nilai Tugas
                                    </Table.HeadCell>
                                    <Table.HeadCell>
                                        Nilai UTS
                                    </Table.HeadCell>
                                    <Table.HeadCell>
                                        Nilai UAS
                                    </Table.HeadCell>

                                </Table.Head>
                                    <Table.Body className="divide-y">
                                        {data.nilai.length > 0 ? data.nilai.map((item, key) => {
                                            return (
                                                <Table.Row key={key} className="bg-white dark:border-gray-700 dark:bg-gray-800">
                                                    <Table.Cell className="whitespace-nowrap font-medium text-gray-900 dark:text-white">
                                                        {item.nis}
                                                    </Table.Cell>
                                                    <Table.Cell>
                                                        {item.name}
                                                    </Table.Cell>
                                                    <Table.Cell>
                                                        <input type="text" className="w-16 rounded" placeholder="0" max={100} min={0} onChange={(e) => {
                                                            const setUpdateData = [...data.nilai.filter(e => e.id != item.id), { id: item.id, name: item.name, uts: item.uts, uas: item.uas, tugas: e.target.value, nis: item.nis }]
                                                            setData("nilai", setUpdateData.sort((a, b) => a.nis < b.nis ? -1 : 1))
                                                        }} />
                                                    </Table.Cell>
                                                    <Table.Cell>
                                                        <input type="text" className="w-16 rounded" placeholder="0" max={100} min={0} onChange={(e) => {
                                                            const setUpdateData = [...data.nilai.filter(e => e.id != item.id), { id: item.id, name: item.name, uts: e.target.value, uas: item.uas, tugas: item.tugas, nis: item.nis }]
                                                            setData("nilai", setUpdateData.sort((a, b) => a.nis < b.nis ? -1 : 1))
                                                        }} />
                                                    </Table.Cell>
                                                    <Table.Cell>
                                                        <input type="text" className="w-16 rounded" placeholder="0" max={100} min={0} onChange={(e) => {
                                                            const setUpdateData = [...data.nilai.filter(e => e.id != item.id), { id: item.id, name: item.name, uts: item.uts, uas: e.target.value, tugas: item.tugas, nis: item.nis }]
                                                            setData("nilai", setUpdateData.sort((a, b) => a.nis < b.nis ? -1 : 1))
                                                        }} />
                                                    </Table.Cell>
                                                </Table.Row>
                                            )
                                        }) : <Table.Row>
                                            <Table.Cell colSpan={5} className="text-center">
                                                Tidak ada siswa yang terdaftar.
                                            </Table.Cell>
                                        </Table.Row>}

                                    </Table.Body>
                                </Table>
                            </section>
                            <InputError className="mt-2" message={errors.nilai} />
                            <div className="flex items-center gap-4">
                                <PrimaryButton >Save</PrimaryButton>

                                <Transition
                                    show={recentlySuccessful}
                                    enterFrom="opacity-0"
                                    leaveTo="opacity-0"
                                    className="transition ease-in-out"
                                >
                                    <p className="text-sm text-gray-600">Saved.</p>
                                </Transition>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </Authenticated>
    )
}
export default Form