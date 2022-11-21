import { DebounceInput } from 'react-debounce-input'
import PrimaryButton from "@/Components/PrimaryButton";
import Authenticated from "@/Layouts/AuthenticatedLayout"
import { Head ,useForm} from '@inertiajs/inertia-react';
import { Inertia } from "@inertiajs/inertia";
import { Table, Button, Alert, Select } from "flowbite-react"
import moment from "moment";
import { PaginationDefault } from '@/Components/Pagination';

const Index = ({ auth, flash, kelas, tahunAjaran, mataPelajaran, siswa,request }) => {
    const handleSearch = ()=> {
     
        Inertia.get(route("laporan.nilai"), data, { preserveState: true })
    }
    const exportPdf=()=>{
        Inertia.get(route("laporan.nilai.export"), data, { preserveState: true })
    }
    const { data, setData, post, put, errors, recentlySuccessful } = useForm({
        search:  '',
        kelas_id:  request?request.kelas_id:'',
        tahun_ajaran_id:  request?request.tahun_ajaran_id:'',
        semester:  request?request.semester:'',
        mata_pelajaran_id: request?request.mata_pelajaran_id:'',
    })
    return (
        <Authenticated auth={auth} header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Laporan</h2>}>
            <Head title="Laporan" />
            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

                    <div className="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <section className="max-w-full">
                            <div className="flex justify-between">
                                <PrimaryButton onClick={() => handleSearch()}>Filter</PrimaryButton>
                                {/* <PrimaryButton onClick={() => exportPdf()}>Export</PrimaryButton> */}
                                <div className="flex  space-x-2">
                                    <select name="" className='rounded-md' id="" onChange={(e) => setData("kelas_id",e.target.value)}>
                                        <option value="">Pilih Kelas</option>
                                        {kelas?.map((item,key) => (<option key={key} value={item.id}>{item.name}</option>))}

                                    </select>
                                    <select name="" className='rounded-md' id="" onChange={(e) => setData("tahun_ajaran_id",e.target.value)}>
                                        <option value="">Pilih Tahun Ajaran</option>
                                        {tahunAjaran?.map((item,key) => (<option key={key} value={item.id}>{item.name}</option>))}

                                    </select>
                                    <select name="" className='rounded-md' id="" onChange={(e) => setData("mata_pelajaran_id",e.target.value)}>
                                        <option value="">Pilih Mapel</option>
                                        {mataPelajaran?.map((item,key) => (<option key={key} value={item.id}>{item.name}</option>))}

                                    </select>
                                    <select name="" className='rounded-md' id="" onChange={(e) => setData("semester",e.target.value)}>
                                        <option value="">Pilih Semester</option>
                                        <option value="Semester 1">Semester 1</option>
                                        <option value="Semester 2">Semester 2</option>
                                    </select>

                                </div>
                            </div>
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
                            <Table className="mt-4"><Table.Head>
                                <Table.HeadCell>
                                    Nis
                                </Table.HeadCell>
                                <Table.HeadCell>
                                    Name
                                </Table.HeadCell>
                                <Table.HeadCell>
                                    TUGAS
                                </Table.HeadCell>
                                <Table.HeadCell>
                                    UTS
                                </Table.HeadCell>
                                <Table.HeadCell>
                                    UAS
                                </Table.HeadCell>

                            </Table.Head>
                                <Table.Body className="divide-y">
                                    {siswa?.data.map((item, key) => {
                                        return (
                                            <Table.Row key={key} className="bg-white dark:border-gray-700 dark:bg-gray-800">
                                                <Table.Cell className="whitespace-nowrap font-medium text-gray-900 dark:text-white">
                                                    {item.nis}
                                                </Table.Cell>
                                                <Table.Cell>
                                                    {item.name}
                                                </Table.Cell>
                                                <Table.Cell>
                                                    {item.nilai?.tugas}
                                                </Table.Cell>
                                                <Table.Cell>
                                                    {item.nilai?.uts}
                                                </Table.Cell>
                                                <Table.Cell>
                                                    {item.nilai?.uas}
                                                </Table.Cell>
                                            </Table.Row>
                                        )
                                    })}

                                </Table.Body></Table>

                            <PaginationDefault
                                prev_url={siswa?.prev_page_url}
                                next_url={siswa?.next_page_url}
                                to={siswa?.to}
                                from={siswa?.from}
                                total={siswa?.total} />


                        </section>
                    </div>
                </div>
            </div>
        </Authenticated>
    )
}
export default Index