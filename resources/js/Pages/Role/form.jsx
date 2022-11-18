import Authenticated from "@/Layouts/AuthenticatedLayout"
import { Head } from "@inertiajs/inertia-react"

const Form = ({ auth }) => {
    return (
        <Authenticated auth={auth} header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Role Form</h2>}
        >
            <Head title="Role Form" />
            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div className="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    </div></div></div>
        </Authenticated>
    )
}
export default Form