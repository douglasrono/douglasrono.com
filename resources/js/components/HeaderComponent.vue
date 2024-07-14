<template>
    <div class="container">
        <header id="header" class="fixed-top d-flex align-items-center bg-info">
            <div
                class="container d-flex align-items-center justify-content-between"
            >
                <div class="logo">
                    <h1>
                        <a href="/" class="text-uppercase text-success"
                            >Douglas Rono</a
                        >
                    </h1>
                </div>

                <nav id="navbar" class="navbar text-uppercase">
                    <ul>
                        <li>
                            <a class="nav-link scrollto active" href="#hero"
                                >Home</a
                            >
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="#about">About</a>
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="#services"
                                >Services</a
                            >
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="#portfolio"
                                >Projects</a
                            >
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="#contact"
                                >Contact</a
                            >
                        </li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
            </div>
        </header>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    },
};
</script>
