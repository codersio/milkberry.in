import About from '@/Components/frontend/about';
import Banner from '@/Components/frontend/banner';
import Footer from '@/Components/frontend/footer';
import Header from '@/Components/frontend/header';
import Portfolio from '@/Components/frontend/portfolio';
import Product from '@/Components/frontend/product';
import Promotion from '@/Components/frontend/promotion';
import Service from '@/Components/frontend/service';
import Team from '@/Components/frontend/team';
import Testimonial from '@/Components/frontend/testimonial';
import React from 'react'


const Home = () => {
    return (
        <>
            <Header />
            <Banner />
            <About />
            <Promotion />
            <Service />
            <Portfolio />
            <Product />
            <Team />
            <Testimonial />
            <Footer />
        </>
    );
}

export default Home;