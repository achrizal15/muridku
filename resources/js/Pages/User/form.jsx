import InputError from "@/Components/InputError"
import PrimaryButton from "@/Components/PrimaryButton"
import Authenticated from "@/Layouts/AuthenticatedLayout"
import { Transition } from "@headlessui/react"
import { Head, useForm } from "@inertiajs/inertia-react"
import { Label, Select, TextInput, Radio } from "flowbite-react"
const Form = ({ auth, roles, user }) => {
    const { data, setData, post, put, errors, recentlySuccessful } = useForm({
        name: user ? user.name : '',
        role_id: user ? user.role_id : "",
        email: user ? user.email : "",
        password: ""
    })

    const handleSubmit = (e) => {
        e.preventDefault();
        if (user) {
            put(route("master.user.put", { user }))
            return false
        }
        post(route("master.user.store"))
    }

    return (
        <Authenticated auth={auth} header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">User Form</h2>}
        >
            <Head title="User Form" />
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
                                        htmlFor="emai" value="Email" />

                                    <TextInput
                                        id="email"
                                        type="email"
                                        className="mt-1 block w-full"
                                        value={data.email}
                                        onChange={(e) => setData('email', e.target.value)}
                                    />

                                    <InputError className="mt-2" message={errors.email} />
                                </div>
                                <div>
                                    <Label
                                        htmlFor="password" value="Password" />

                                    <TextInput
                                        id="password"
                                        type="password"
                                        className="mt-1 block w-full"
                                        value={data.password}
                                        onChange={(e) => setData('password', e.target.value)}
                                    />

                                    <InputError className="mt-2" message={errors.password} />
                                </div>
                                <div id="select">
                                    <div className="mb-2 block">
                                        <Label
                                            htmlFor="role_id"
                                            value="Role"
                                        />
                                    </div>
                                    <Select name="role_id"
                                        value={data.role_id}
                                        onChange={(e) => setData("role_id", e.target.value)}
                                        id="role_id"
                                    >
                                        <option value="select one" >Select One</option>
                                        {roles.map((item, key) => {
                                            return (<option key={key} value={item.id}>{item.name}</option>)
                                        })}
                                    </Select>
                                    <InputError className="mt-2" message={errors.role_id} />
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