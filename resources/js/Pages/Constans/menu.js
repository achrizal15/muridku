const menu = [
    { title: "Dashboard", route: route('dashboard'), active: route().current('dashboard') },
    {
        title: "Master", route: "#", active: route().current('master.*'), submenu: [
            { title: "Role", route: route("master.role"), active: route().current("master.role") },
            { title: "User", route: route("master.user"), active: route().current("master.user") },
            { title: "Siswa", route: route("master.siswa"), active: route().current("master.siswa") },
            { title: "Kelas", route: route("master.kelas"), active: route().current("master.kelas") },
            { title: "Mata Pelajaran", route: route("master.mata-pelajaran"), active: route().current("master.kelas") },
            { title: "Tahun Ajaran", route: route("master.tahun-ajaran"), active: route().current("master.kelas") },
        ]
    },
]
export {menu}