<template>
    <div>
      <footer id="footer">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-lg-6 text-lg-left text-center">
              <div class="copyright">
                &copy; {{ currentYear }}
                <strong>{{ name }}</strong>. All Rights Reserved
              </div>
            </div>
            <div class="col-lg-6">
              <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                <div class="row">
                  <div class="col link-item" v-for="link in linksArray" :key="link.name">
                    <a :href="link.href" class="scrollto">{{ link.name }}</a>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </template>

  <script>
  export default {
    mounted() {
      console.log("Component mounted.");
    },
    data() {
      return {
        currentYear: new Date().getFullYear(),
        name: "Douglas Rono",
        links: ["Home", "About", "Portfolio", "Projects"],
      };
    },
    computed: {
      linksArray() {
        return this.links.map((link) => ({
          name: link,
          href: `#${link.toLowerCase()}`, // Assuming the href should be based on the lowercase link name
        }));
      },
    },
  };
  </script>

  <style>
  .link-item {
    margin-right: 0px; /* Adjust the spacing as needed */
    font-size: 20px;
    text-transform: uppercase;
  }
  </style>
