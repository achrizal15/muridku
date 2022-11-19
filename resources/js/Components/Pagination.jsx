import { Inertia } from "@inertiajs/inertia"
export const PaginationDefault = ({ total, to, from, prev_url = "", next_url = "" }) => {
    return (<div className="flex flex-col mt-2">
        <span className="text-sm text-gray-700 dark:text-gray-400">
            Showing <span className="font-semibold text-gray-900 dark:text-white">{from}</span> to <span className="font-semibold text-gray-900 dark:text-white">{to}</span> of <span className="font-semibold text-gray-900 dark:text-white">{total}</span> Entries
        </span>
        <div className="inline-flex mt-2 xs:mt-0">
            <button disabled={!prev_url && true} onClick={() => Inertia.get(prev_url, {},{
                preserveState: true,
                replace: true,
            })} className="px-4 py-2 text-sm font-medium text-white bg-gray-800 rounded-l hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Prev
            </button>
            <button disabled={!next_url && true} className="px-4 py-2 text-sm font-medium text-white bg-gray-800 border-0 border-l border-gray-700 rounded-r hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" onClick={() => Inertia.get(next_url,{},{
            preserveState: true,
            replace: true,
        })}>
                Next
            </button>
        </div>
    </div>)
} 