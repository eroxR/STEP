// funciones alpine del dasboard
function data() {
    function getThemeFromLocalStorage() {
        // if user already changed the theme, use it
        if (window.localStorage.getItem('dark')) {
            return JSON.parse(window.localStorage.getItem('dark'));
        }

        // else return their preferences
        return (
            !!window.matchMedia &&
            window.matchMedia('(prefers-color-scheme: dark)').matches
        );
    }

    function getMenuFromLocalStorage() {
        // if user already changed the theme, use it
        if (window.localStorage.getItem('isSideMenuOpen')) {
            return JSON.parse(window.localStorage.getItem('isSideMenuOpen'));
        }
    }

    function setThemeToLocalStorage(value) {
        window.localStorage.setItem('dark', value);
    }

    function setMenuToLocalStorage(value) {
        window.localStorage.setItem('isSideMenuOpen', value);
    }

    return {
        dark: getThemeFromLocalStorage(),
        toggleTheme() {
            this.dark = !this.dark;
            setThemeToLocalStorage(this.dark);
        },
        tuser: 0,
        typeUser(valor){
            console.log(valor);
        },
        show:false,
        flotan: '',
        view:'manuals',
        minidisplay:'block fixed -mt-9 border transition-colors duration-150 text-white ml-4 text-sm bg-gray-900 px-2 py-1 rounded-md',
        selectdisplay:'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg',
        changesView(v){
            view = v;
            console.log(view);
        },
        // variable: null,
        // titleflotan(id) {
           
        // },
        isSideMenuOpen: getMenuFromLocalStorage(),
        toggleSideMenu() {
            this.isSideMenuOpen = !this.isSideMenuOpen;
            setMenuToLocalStorage(this.isSideMenuOpen);
        },
        // closeSideMenu() {
        //     this.isSideMenuOpen = false;
        // },
        isNotificationsMenuOpen: false,
        toggleNotificationsMenu() {
            this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen;
        },
        closeNotificationsMenu() {
            this.isNotificationsMenuOpen = false;
        },
        isProfileMenuOpen: false,
        toggleProfileMenu() {
            this.isProfileMenuOpen = !this.isProfileMenuOpen;
        },
        closeProfileMenu() {
            this.isProfileMenuOpen = false;
        },
        isPagesMenuOpen: false,
        togglePagesMenu() {
            this.isPagesMenuOpen = !this.isPagesMenuOpen;
        },
        // Modal
        isModalOpen: false,
        isModalOpen2: false,
        // trapCleanup: null,
        openModal() {
            this.isModalOpen = true;
            // this.trapCleanup = focusTrap(document.querySelector('#modal'));
            // console.log(isModalOpen2);
        },
        closeModal() {
            this.isModalOpen = false;
            // this.trapCleanup();
            // console.log(isModalOpen2);
        },
        openModal2() {
            this.isModalOpen2 = true;
            // this.trapCleanup = focusTrap(document.querySelector('#modal'));
        },
        closeModal2() {
            this.isModalOpen2 = false;
            // this.trapCleanup();
        },
    };
}
