import DangerButton from "@/Components/DangerButton";
import PrimaryButton from "@/Components/PrimaryButton";
import WarningButton from "@/Components/WarningButton";
import Authenticated from "@/Layouts/AuthenticatedLayout"
import { Head, Link } from '@inertiajs/inertia-react';
import moment from "moment";
import DataTable from 'react-data-table-component';
const Index = ({ auth, roles }) => {
    const columns = [
        {
            name: 'Name',
            selector: row => row.name,
        },
        {
            name: 'Landing Page',
            selector: row => row.landing_page,
        },
        {
            name: 'Created At',
            selector: row => moment(row.created_at).format("D MMMM YYYY"),
        },
        {
            name: 'Action',
            selector: row => (<div className="space-x-4"><WarningButton>Edit</WarningButton>
            <DangerButton>Delete</DangerButton></div>),
        },
    ];
    return (
        <Authenticated auth={auth} header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Role</h2>}>
            <Head title="Role" />
            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div className="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <section className="max-w-full">
                            <Link href={route("master.role.add")}>
                                <PrimaryButton >ADD</PrimaryButton></Link>
                                <DataTable
            columns={columns}
            data={roles.data}
            pagination={true}
            paginationRowsPerPageOptions={[10]}
        />
                        
                        </section>
                    </div>
                </div>
            </div>
        </Authenticated>
    )
}
export default Index