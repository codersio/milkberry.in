import React from 'react'


const Testimonial = () => {
    return (
        <div className="container-fluid py-5">
            <div className="container py-5">
                <div className="row justify-content-center">
                    <div className="col-lg-6">
                        <h1 className="section-title position-relative text-center mb-5">Clients Say About Our Famous Ice Cream</h1>
                    </div>
                </div>
                <div className="row justify-content-center">
                    <div className="col-lg-8">
                        <div className="owl-carousel testimonial-carousel">
                            <div className="text-center">
                                <i className="fa fa-3x fa-quote-left text-primary mb-4" />
                                <h4 className="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                                <img className="img-fluid mx-auto mb-3 rounded-full" src="https://demo.htmlcodex.com/1362/ice-cream-shop-website-template/img/testimonial-3.jpg" alt="" />
                                <h5 className="font-weight-bold m-0">Client Name</h5>
                                <span>Profession</span>
                            </div>
                            {/* <div className="text-center">
                                <i className="fa fa-3x fa-quote-left text-primary mb-4" />
                                <h4 className="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                                <img className="img-fluid mx-auto mb-3" src="img/testimonial-2.jpg" alt="" />
                                <h5 className="font-weight-bold m-0">Client Name</h5>
                                <span>Profession</span>
                            </div>
                            <div className="text-center">
                                <i className="fa fa-3x fa-quote-left text-primary mb-4" />
                                <h4 className="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                                <img className="img-fluid mx-auto mb-3" src="img/testimonial-3.jpg" alt="" />
                                <h5 className="font-weight-bold m-0">Client Name</h5>
                                <span>Profession</span>
                            </div> */}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Testimonial;