import React from 'react'
import { FaFacebookF, FaTwitter } from "react-icons/fa6";

import { FaYoutube } from "react-icons/fa";

const Team = () => {
    return (<div className="container-fluid py-5">
        <div className="container py-5">
            <div className="row">
                <div className="col-lg-6">
                    <h1 className="section-title position-relative mb-5">Experienced &amp; Most Famous Ice Cream Chefs</h1>
                </div>
                <div className="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0" />
            </div>
            <div className="row">
                <div className="col-12">
                    <div className="owl-carousel team-carousel grid grid-cols-3">
                        <div className="team-item">
                            <div className="team-img mx-auto">
                                <img className="rounded-circle w-100 h-100" src="https://demo.htmlcodex.com/1362/ice-cream-shop-website-template/img/team-1.jpg" style={{ objectFit: 'cover' }} />
                            </div>
                            <div className="position-relative text-center bg-light rounded px-4 py-5" style={{ marginTop: '-100px' }}>
                                <h3 className="font-weight-bold mt-5 mb-3 pt-5">Full Name</h3>
                                <h6 className="text-uppercase text-muted mb-4">Designation</h6>
                                <div className="d-flex justify-content-center pt-1">
                                    <a className="btn btn-outline-secondary btn-social mr-2 grid place-items-center" href="#">
                                        <div className='icon w-full h-full grid place-items-center'>
                                            <FaFacebookF />
                                        </div>
                                    </a>
                                    <a className="btn btn-outline-secondary btn-social mr-2 grid place-items-center" href="#">
                                        <div className='icon w-full h-full grid place-items-center'>
                                            <FaTwitter />
                                        </div>
                                    </a>
                                    <a className="btn btn-outline-secondary btn-social mr-2" href="#">
                                        <div className='icon w-full h-full grid place-items-center'>
                                            <FaYoutube />
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div className="team-item">
                            <div className="team-img mx-auto">
                                <img className="rounded-circle w-100 h-100" src="https://demo.htmlcodex.com/1362/ice-cream-shop-website-template/img/team-2.jpg" style={{ objectFit: 'cover' }} />
                            </div>
                            <div className="position-relative text-center bg-light rounded px-4 py-5" style={{ marginTop: '-100px' }}>
                                <h3 className="font-weight-bold mt-5 mb-3 pt-5">Full Name</h3>
                                <h6 className="text-uppercase text-muted mb-4">Designation</h6>
                                <div className="d-flex justify-content-center pt-1">
                                    <a className="btn btn-outline-secondary btn-social mr-2 grid place-items-center" href="#">
                                        <div className='icon w-full h-full grid place-items-center'>
                                            <FaFacebookF />
                                        </div>
                                    </a>
                                    <a className="btn btn-outline-secondary btn-social mr-2 grid place-items-center" href="#">
                                        <div className='icon w-full h-full grid place-items-center'>
                                            <FaTwitter />
                                        </div>
                                    </a>
                                    <a className="btn btn-outline-secondary btn-social mr-2" href="#">
                                        <div className='icon w-full h-full grid place-items-center'>
                                            <FaYoutube />
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div className="team-item">
                            <div className="team-img mx-auto">
                                <img className="rounded-circle w-100 h-100" src="https://demo.htmlcodex.com/1362/ice-cream-shop-website-template/img/team-1.jpg" style={{ objectFit: 'cover' }} />
                            </div>
                            <div className="position-relative text-center bg-light rounded px-4 py-5" style={{ marginTop: '-100px' }}>
                                <h3 className="font-weight-bold mt-5 mb-3 pt-5">Full Name</h3>
                                <h6 className="text-uppercase text-muted mb-4">Designation</h6>
                                <div className="d-flex justify-content-center pt-1">
                                    <a className="btn btn-outline-secondary btn-social mr-2 grid place-items-center" href="#">
                                        <div className='icon w-full h-full grid place-items-center'>
                                            <FaFacebookF />
                                        </div>
                                    </a>
                                    <a className="btn btn-outline-secondary btn-social mr-2 grid place-items-center" href="#">
                                        <div className='icon w-full h-full grid place-items-center'>
                                            <FaTwitter />
                                        </div>
                                    </a>
                                    <a className="btn btn-outline-secondary btn-social mr-2" href="#">
                                        <div className='icon w-full h-full grid place-items-center'>
                                            <FaYoutube />
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {/* <div className="team-item">
                            <div className="team-img mx-auto">
                                <img className="rounded-circle w-100 h-100" src="img/team-4.jpg" style={{ objectFit: 'cover' }} />
                            </div>
                            <div className="position-relative text-center bg-light rounded px-4 py-5" style={{ marginTop: '-100px' }}>
                                <h3 className="font-weight-bold mt-5 mb-3 pt-5">Full Name</h3>
                                <h6 className="text-uppercase text-muted mb-4">Designation</h6>
                                <div className="d-flex justify-content-center pt-1">
                                    <a className="btn btn-outline-secondary btn-social mr-2" href="#"><i className="fab fa-twitter" /></a>
                                    <a className="btn btn-outline-secondary btn-social mr-2" href="#"><i className="fab fa-facebook-f" /></a>
                                    <a className="btn btn-outline-secondary btn-social mr-2" href="#"><i className="fab fa-linkedin-in" /></a>
                                </div>
                            </div>
                        </div> */}
                    </div>
                </div>
            </div>
        </div>
    </div>
    );
}

export default Team;