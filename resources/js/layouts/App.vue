<script setup>
import Header from "../components/Header.vue";
import Footer from "../components/Footer.vue";
import Navbar from "../components/Navbar.vue";
import CountdownTimer from "../components/CountdownTimer.vue";
import Categories from "../components/Categories.vue";
import Offer from "../components/Offer.vue";
import RaffleForm from "../components/RaffleForm.vue";
</script>

<template>
    <Navbar />
    <Header />
    <main>
        <CountdownTimer />
        <Categories />
        <Offer />
        <RaffleForm />
    </main>
    <Footer />
</template>
