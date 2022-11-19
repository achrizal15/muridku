import InputError from "@/Components/InputError"
import PrimaryButton from "@/Components/PrimaryButton"
import Authenticated from "@/Layouts/AuthenticatedLayout"
import { Transition } from "@headlessui/react"
import { Head, useForm } from "@inertiajs/inertia-react"
import { Label, Select, TextInput, Radio } from "flowbite-react"
const Form = ({ auth, menus, role }) => {
    const { data, setData, post, put, errors, recentlySuccessful } = useForm({
        name: role ? role.name : '',
        landing_page: role ? role.landing_page : '',
        access: role ? role.menu_access.map((e) => e.id) : []
    })

    const handleSubmit = (e) => {
        e.preventDefault();
        if (role) {
            put(route("master.role.put",{role}))
            return false
        }
        post(route("master.role.store"))
    }
    const MenuComponent = ({ title, id }) => {
        return (<fieldset
            className="flex flex-col gap-4"
            id="radio"
        >
            <legend>
                {title}
            </legend>
            <div className="flex items-center gap-2">
                <Radio
                    id={`denny-${id}`}
                    name={id}
                    defaultChecked={!data.access.find(e => e == id)}
                    onChange={() => setData("access", [...data.access.filter(e => e != id)])}
                />
                <Label htmlFor={`denny-${id}`}>
                    Deny permission
                </Label>
            </div>
            <div className="flex items-center gap-2">
                <Radio
                    id={`allow-${id}`}
                    name={id}
                    value="Allow"
                    defaultChecked={data.access.find(e => e == id)}
                    onChange={() => {
                        if (!data.access.find(e => e == id)) {
                            setData("access", [...data.access, id])
                        }
                    }}
                />
                <Label htmlFor={`allow-${id}`}>
                    Allow
                </Label>
            </div>
        </fieldset>)
    }
    return (
        <Authenticated auth={auth} header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Role Form</h2>}
        >
            <Head title="Role Form" />
            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div className="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <section className="max-w-xl">
                            <header>
                                <h2 className="text-lg font-medium text-gray-900">General</h2>
                                <p className="mt-1 text-sm text-gray-600">
                                    Setup role management
                                </p>
                            </header>

                            <form className="mt-6 space-y-6" onSubmit={handleSubmit}>
                                <div>
                                    <Label
                                        htmlFor="landing_page" value="Name" />

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
                                <div id="select">
                                    <div className="mb-2 block">
                                        <Label
                                            htmlFor="landing_page"
                                            value="Select Landing Page"
                                        />
                                    </div>
                                    <Select name="landing_page"
                                        value={data.landing_page}
                                        onChange={(e) => setData("landing_page", e.target.value)}
                                        id="landing_page"
                                    >
                                        <option value="select one" >Select One</option>
                                        {data.access.sort((a, b) => a > b ? 1 : -1).map((item, key) => {
                                            if (menus[item - 1].route != "#") {
                                                return (<option key={key} value={menus[item - 1].route}>{menus[item - 1].title}</option>)
                                            }
                                        })}
                                    </Select>
                                    <InputError className="mt-2" message={errors.landing_page} />
                                </div>
                                <div className="grid grid-cols-2">
                                    {menus.filter(e => e.route != "#").map((item, key) => (<MenuComponent title={item.title} id={item.id} key={key} />))}
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