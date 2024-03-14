import React from 'react'


const Header = () => {
    return (
        <div>
            {/* Topbar Start */}
            <div className="container-fluid bg-primary py-3 d-none d-md-block">
                <div className="container">
                    <div className="row">
                        <div className="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                            <div className="d-inline-flex align-items-center">
                                <a className="text-white pr-3" href>FAQs</a>
                                <span className="text-white">|</span>
                                <a className="text-white px-3" href>Help</a>
                                <span className="text-white">|</span>
                                <a className="text-white pl-3" href>Support</a>
                            </div>
                        </div>
                        <div className="col-md-6 text-center text-lg-right">
                            <div className="d-inline-flex align-items-center">
                                <a className="text-white px-3" href>
                                    <i className="fab fa-facebook-f" />
                                </a>
                                <a className="text-white px-3" href>
                                    <i className="fab fa-twitter" />
                                </a>
                                <a className="text-white px-3" href>
                                    <i className="fab fa-linkedin-in" />
                                </a>
                                <a className="text-white px-3" href>
                                    <i className="fab fa-instagram" />
                                </a>
                                <a className="text-white pl-3" href>
                                    <i className="fab fa-youtube" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {/* Topbar End */}
            {/* Navbar Start */}
            <div className="container-fluid position-relative nav-bar p-0">
                <div className="container-lg position-relative p-0 px-lg-3" style={{ zIndex: 9 }}>
                    <nav className="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                        <a href="index.html" className="navbar-brand d-block d-lg-none">
                            <h1 className="m-0 display-4 text-primary"><span className="text-secondary">i</span>CREAM</h1>
                        </a>
                        <button type="button" className="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span className="navbar-toggler-icon" />
                        </button>
                        <div className='grid place-items-center w-full'>
                            <div className="flex justify-content-between" id="navbarCollapse">
                                <div className="navbar-nav ml-auto py-0">

                                    <a className="nav-item nav-link  text-black">Home</a>
                                    <a href="about.html" className="nav-item nav-link">About</a>
                                    <a href="product.html" className="nav-item nav-link">Product</a>
                                </div>
                                <a href="index.html" className="navbar-brand mx-5 d-none d-lg-block">
                                    <h1 className="m-0 display-4 text-primary"><span className="text-secondary">i</span>CREAM</h1>
                                </a>
                                <div className="navbar-nav mr-auto py-0">
                                    <a href="service.html" className="nav-item nav-link">Service</a>
                                    <a href="gallery.html" className="nav-item nav-link">Gallery</a>
                                    <a href="contact.html" className="nav-item nav-link">Contact</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            {/* Navbar End */}
        </div>
    );
}

export default Header;