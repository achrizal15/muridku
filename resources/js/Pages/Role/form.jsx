import PrimaryButton from "@/Components/PrimaryButton"
import Authenticated from "@/Layouts/AuthenticatedLayout"
import { Transition } from "@headlessui/react"
import { Head, useForm } from "@inertiajs/inertia-react"
import { Label, Select, TextInput } from "flowbite-react"
import { menu } from "../Constans/menu"
const Form = ({ auth }) => {
    const { data, setData, post, recentlySuccessful } = useForm({
        name: "",
        landing_page: '',
        access: []
    })
    const handleSubmit = (e) => {
        e.preventDefault();
        // post(route("master.role.store"))
        console.log(menu)
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
                                        required
                                        autoComplete="name"
                                    />

                                    {/* <InputError className="mt-2" message={errors.name} /> */}
                                </div>
                                <div id="select">
                                    <div className="mb-2 block">
                                        <Label
                                            htmlFor="landing_page"
                                            value="Select Landing Page"
                                        />
                                    </div>
                                    <Select name="landing_page"
                                        onChange={(e) => setData("landing_page", e.target.value)}
                                        id="landing_page"
                                        required={true}
                                    >
                                        {menu.map((item, key) => {
                                            if(!item.submenu){
                                                return (<option key={key} value={key}>{item.title}</option>)
                                            }
                                            return (<optgroup key={key} label={item.title}>
                                                    {item.submenu.map((itemSub,keySub)=>{
                                                        return (
                                                            <option key={keySub} value={`${key}.${keySub}`}>
                                                                {itemSub.title}
                                                            </option>
                                                        )
                                                    })}
                                            </optgroup>)
                                        })}
                                    </Select>
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