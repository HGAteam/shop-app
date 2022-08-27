<template>
    
</template>

<script>
import axios from "axios";
export default {
    name: "ProductCards",
    data: () => ({
        products: [],
        prods: [],
        prd: []
    }),
    
    mounted() {
        this.getProductsInCart();
        this.getProducts();
    },

    methods: {
        addProduct(product) {
            axios.post("/add-cart/product=" + product.id).then((response) => {
                console.log(product.id);
                this.getProducts();
                this.getProductsInCart();

            });
        },

        saveProducts(product) {
            // const parsed = JSON.stringify(this.products);
            // localStorage.setItem("products", parsed);
        },

        removeProduct(product) {
            axios
                .delete("remove-from-cart/product=" + product.id)
                .then((response) => {
                    this.getProducts();
                    this.getProductsInCart();
                })
                .catch((err) => {
                    console.log(err);
                });
        },

        getProducts() {
            axios.get("/products").then((response) => {
                this.products = response.data.products;
            });
        },

        getProductsInCart() {
            axios.get("/products-in-cart").then((response) => {
                if (response.data.cart_details) {
                    this.prods = response.data.cart_details;
                    Array.from(this.prods).forEach((prod) => {
                        this.prd = prod;
                    });
                }
            });
        },
    }
};
</script>
