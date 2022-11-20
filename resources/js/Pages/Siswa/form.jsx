import InputError from "@/Components/InputError"
import PrimaryButton from "@/Components/PrimaryButton"
import Authenticated from "@/Layouts/AuthenticatedLayout"
import { Transition } from "@headlessui/react"
import { Head, useForm } from "@inertiajs/inertia-react"
import { Label, TextInput } from "flowbite-react"
import Select from 'react-select';
const Form = ({ auth, siswa, kelas, tahunAjaran }) => {
    const { data, setData, post, put, errors, recentlySuccessful } = useForm({
        name: siswa ? siswa.name : '',
        kelas_id: siswa ? siswa.kelas_id : '',
        tahun_ajaran_id: siswa ? siswa.tahun_ajaran_id : '',
    })

    const handleSubmit = (e) => {
        e.preventDefault();
        if (siswa) {
            put(route("master.siswa.put", { siswa }))
            return false
        }
        post(route("master.siswa.store"))
    }

    return (
        <Authenticated auth={auth} header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Siswa Form</h2>}
        >
            <Head title="Siswa Form" />
            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div className="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <section className="max-w-xl">
                            <form className="mt-6 space-y-6" onSubmit={handleSubmit}>
                                <div>
                                    <Label
                                        htmlFor="name" value="Name" />

                                    <TextInput
                                        id="name"
                                        type="text"
                                        className="mt-1 block w-full"
                                        value={data.name}
                                        onChange={(e) => setData('name', e.target.value)}
                                        autoComplete="name"
                                    />

                                    <InputError className="mt-2" message={errors.name} />
                                </div>
                                <div>
                                    <Label
                                        htmlFor="kelas" value="Kelas" />
                                    <Select
                                        className="basic-single"
                                        classNamePrefix="select"
                                        isSearchable={true}
                                        name="kelas_id"
                                        defaultValue={siswa ? { label: siswa.kelas.name, value: siswa.kelas.id } : []}
                                        onChange={(e) => setData("kelas_id", e.value)}
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
                                        defaultValue={siswa ? { label: siswa.tahun_ajaran.name, value: siswa.tahun_ajaran.id } : []}
                                        onChange={(e) => setData("tahun_ajaran_id", e.value)}
                                        options={[...tahunAjaran.map((item) => ({ label: item.name, value: item.id }))]}
                                    />
                                     <InputError className="mt-2" message={errors.tahun_ajaran_id} />
                                </div>
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
                        </section>
                    </div>
                </div>
            </div>
        </Authenticated>
    )
}
export default Form