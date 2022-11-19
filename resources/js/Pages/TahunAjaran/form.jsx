import InputError from "@/Components/InputError"
import PrimaryButton from "@/Components/PrimaryButton"
import Authenticated from "@/Layouts/AuthenticatedLayout"
import { Transition } from "@headlessui/react"
import { Head, useForm } from "@inertiajs/inertia-react"
import { Label, Select, TextInput, Radio } from "flowbite-react"
const Form = ({ auth,  tahunAjaran }) => {
    const { data, setData, post, put, errors, recentlySuccessful } = useForm({
        name: tahunAjaran ? tahunAjaran.name : '',
    })

    const handleSubmit = (e) => {
        e.preventDefault();
        if (tahunAjaran) {
            put(route("master.tahun-ajaran.put", { tahunAjaran }))
            return false
        }
        post(route("master.tahun-ajaran.store"))
    }

    return (
        <Authenticated auth={auth} header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Tahun Ajaran Form</h2>}
        >
            <Head title="Tahun Ajaran Form" />
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