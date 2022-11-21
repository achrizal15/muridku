import { DebounceInput } from 'react-debounce-input'
import PrimaryButton from "@/Components/PrimaryButton";
import Authenticated from "@/Layouts/AuthenticatedLayout"
import { Head } from '@inertiajs/inertia-react';
import { Inertia } from "@inertiajs/inertia";
import { Table, Button, Alert } from "flowbite-react"
import moment from "moment";
import { PaginationDefault } from '@/Components/Pagination';

const Index = ({ auth, flash, penempatan }) => {  
    const handleSearch = async value => {
        Inertia.get(route("transaksi.penempatan"), { search: value }, { preserveState: true })
    }
    return (
        <Authenticated auth={auth} header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Penempatan</h2>}>
            <Head title="Penempatan" />
            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div className="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <section className="max-w-full">
                            <div className="flex justify-between">
                                <PrimaryButton onClick={() => Inertia.get(route("transaksi.penempatan.add"))}>ADD</PrimaryButton>
                                <div className="flex items-center">

                                    <DebounceInput
                                        type="search"
                                        className="px-2 rounded-md"
                                        placeholder="Search here..."
                                        minLength={1}
                                        debounceTimeout={1000}
                                        onChange={event => (handleSearch(event.target.value))}
                                    />
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
                                  Kelas Saat Ini
                                </Table.HeadCell>
                                <Table.HeadCell>
                                    Kelas Sebelumnya
                                </Table.HeadCell>
                                <Table.HeadCell>
                                  Tahun Ajaran
                                </Table.HeadCell>
                                <Table.HeadCell>
                                    Tanggal Pindah
                                </Table.HeadCell>
                             

                            </Table.Head>
                                <Table.Body className="divide-y">
                                    {penempatan.data.map((item, key) => {
                                        return (
                                            <Table.Row key={key} className="bg-white dark:border-gray-700 dark:bg-gray-800">
                                                <Table.Cell className="whitespace-nowrap font-medium text-gray-900 dark:text-white">
                                                    {item.siswa.nis}
                                                </Table.Cell>
                                                <Table.Cell>
                                                    {item.siswa.name}
                                                </Table.Cell>
                                                <Table.Cell>
                                                    {item.kelas?.name}
                                                </Table.Cell>
                                                <Table.Cell>
                                                    {item.old_kelas?.name}
                                                </Table.Cell>
                                                <Table.Cell>
                                                    {item.tahun_ajaran.name}
                                                </Table.Cell>
                                                <Table.Cell>
                                                    {moment(item.created_at).format("D MMMM YYYY")}
                                                </Table.Cell>
                                            </Table.Row>
                                        )
                                    })}

                                </Table.Body></Table>

                            <PaginationDefault
                                prev_url={penempatan.prev_page_url}
                                next_url={penempatan.next_page_url}
                                to={penempatan.to}
                                from={penempatan.from}
                                total={penempatan.total} />


                        </section>
                    </div>
                </div>
            </div>
        </Authenticated>
    )
}
export default Index