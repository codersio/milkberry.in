import React from 'react'
import { FaFacebookF, FaTwitter } from "react-icons/fa6";

import { FaYoutube } from "react-icons/fa";

const Footer = () => {
    return (<div className="container-fluid footer bg-light py-5" style={{ marginTop: '90px' }}>
        <div className="container text-center py-5">
            <div className="row">
                <div className="col-12 mb-4">
                    <a href="index.html" className="navbar-brand m-0">
                        <h1 className="m-0 mt-n2 display-4 text-primary"><span className="text-secondary">i</span>CREAM</h1>
                    </a>
                </div>
                <div className="col-12 mb-4">
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
                <div className="col-12 mt-2 mb-4">
                    <div className="row">
                        <div className="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                            <h5 className="font-weight-bold mb-2">Get In Touch</h5>
                            <p className="mb-2">123 Street, New York, USA</p>
                            <p className="mb-0">+012 345 67890</p>
                        </div>
                        <div className="col-sm-6 text-center text-sm-left">
                            <h5 className="font-weight-bold mb-2">Opening Hours</h5>
                            <p className="mb-2">Mon – Sat, 8AM – 5PM</p>
                            <p className="mb-0">Sunday: Closed</p>
                        </div>
                    </div>
                </div>
                {/* <div className="col-12">
                    <p className="m-0">© <a href="#">Domain</a>. All Rights Reserved. Designed by <a href="https://htmlcodex.com">HTML Codex</a>
                    </p>
                </div> */}
            </div>
        </div>
    </div>);
}

export default Footer;