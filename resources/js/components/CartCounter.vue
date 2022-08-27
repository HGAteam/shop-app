<template>
    <div>
        <li class="nav-item">
            <a
                class="nav-link"
                href="#"
                data-placement="bottom"
                title="Shopping Cart"
            >
                <i class="now-ui-icons shopping_cart-simple"></i>
                <span
                    class="badge badge-secondary px-1 total-count"
                    style="font-size: 10px"
                >
                    {{ counter }}
                </span>
            </a>
        </li>
    </div>
</template>
<script>
export default {
    name: 'CartCounter',
    data() {
        return {
            counter: 0,
        };
    },
    mounted() {
        this.getProducts()
    },

    methods: {
     getProducts() {
            axios.get("/products-in-cart").then(response => {
                if(response.data.cart_details.length){
                    this.counter = response.data.cart_details.length
                }
            })
        },
    },
};
</script>
