import InputError from "@/Components/InputError"
import PrimaryButton from "@/Components/PrimaryButton"
import Authenticated from "@/Layouts/AuthenticatedLayout"
import { Transition } from "@headlessui/react"
import { Head, useForm } from "@inertiajs/inertia-react"
import { Label, TextInput, Radio } from "flowbite-react"
import Select from 'react-select';
const Form = ({ auth, mataPelajaran, users }) => {
    const { data, setData, post, put, errors, recentlySuccessful } = useForm({
        name: mataPelajaran ? mataPelajaran.name : '',
        kkm:mataPelajaran ? mataPelajaran.kkm : 0,
        user_id: mataPelajaran ? mataPelajaran.user_id : '',
    })
    const handleSubmit = (e) => {
        e.preventDefault();
        if (mataPelajaran) {
            put(route("master.mata-pelajaran.put", { mataPelajaran }))
            return false
        }
        post(route("master.mata-pelajaran.store"))
    }

    return (
        <Authenticated auth={auth} header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Mata Pelajaran Form</h2>}
        >
            <Head title="Mata Pelajaran Form" />
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
                                        htmlFor="KKM" value="KKM" />

                                    <TextInput
                                        id="KKM"
                                        type="number"
                                        min={0}
                                        max={100}
                                        className="mt-1 block w-full"
                                        value={data.kkm}
                                        onChange={(e) => setData('kkm', e.target.value)}
                                        autoComplete="name"
                                    />

                                    <InputError className="mt-2" message={errors.name} />
                                </div>
                                <div>
                                    <Label
                                        htmlFor="user_id" value="Guru" />
                                    <Select
                                        className="basic-single"
                                        classNamePrefix="select"
                                        isSearchable={true}
                                        name="user_id"
                                        defaultValue={mataPelajaran ? { label: mataPelajaran.user.name, value: mataPelajaran.user.id } : []}
                                        onChange={(e) => setData("user_id", e.value)}
                                        options={[...users.map((item) => ({ label: item.name, value: item.id }))]}
                                    />
                                    <InputError className="mt-2" message={errors.user_id} />
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