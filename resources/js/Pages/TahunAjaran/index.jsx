import { DebounceInput } from 'react-debounce-input'
import PrimaryButton from "@/Components/PrimaryButton";
import Authenticated from "@/Layouts/AuthenticatedLayout"
import { Head } from '@inertiajs/inertia-react';
import { Inertia } from "@inertiajs/inertia";
import { Table, Button, Alert } from "flowbite-react"
import moment from "moment";
import { PaginationDefault } from '@/Components/Pagination';

const Index = ({ auth, flash, tahunAjaran }) => {  
    const handleSearch = async value => {
        Inertia.get(route("master.tahun-ajaran"), { search: value }, { preserveState: true })
    }
    return (
        <Authenticated auth={auth} header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Tahun Ajaran</h2>}>
            <Head title="Tahun Ajaran" />
            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div className="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <section className="max-w-full">
                            <div className="flex justify-between">
                                <PrimaryButton onClick={() => Inertia.get(route("master.tahun-ajaran.add"))}>ADD</PrimaryButton>
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
                                    Tahun Ajaran
                                </Table.HeadCell>
                                <Table.HeadCell>
                                    Created At
                                </Table.HeadCell>
                                <Table.HeadCell>
                                    Action
                                </Table.HeadCell>

                            </Table.Head>
                                <Table.Body className="divide-y">
                                    {tahunAjaran.data.map((item, key) => {
                                        return (
                                            <Table.Row key={key} className="bg-white dark:border-gray-700 dark:bg-gray-800">
                                                <Table.Cell className="whitespace-nowrap font-medium text-gray-900 dark:text-white">
                                                    {item.name}
                                                </Table.Cell>
                                                <Table.Cell>
                                                    {moment(item.created_at).format("D MMMM YYYY")}
                                                </Table.Cell>

                                                <Table.Cell className='flex space-x-2'>
                                                <Button color="warning" onClick={() => Inertia.get(route("master.tahun-ajaran.edit", { tahunAjaran: item.id }))}>
                                                        Edit
                                                    </Button>
                                                        <Button color="failure" onClick={() => Inertia.delete(route("master.tahun-ajaran.delete", { tahunAjaran: item.id }))}>
                                                            Delete
                                                        </Button>
                                                </Table.Cell>
                                            </Table.Row>
                                        )
                                    })}

                                </Table.Body></Table>

                            <PaginationDefault
                                prev_url={tahunAjaran.prev_page_url}
                                next_url={tahunAjaran.next_page_url}
                                to={tahunAjaran.to}
                                from={tahunAjaran.from}
                                total={tahunAjaran.total} />


                        </section>
                    </div>
                </div>
            </div>
        </Authenticated>
    )
}
export default Index