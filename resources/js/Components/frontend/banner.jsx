import React from 'react'


const Banner = () => {
    return (
        <div className="container-fluid p-0 mb-5 pb-5">
            <div id="header-carousel" className="carousel slide" data-ride="carousel">
                <div className="carousel-inner">
                    <div className="carousel-item active">
                        <img className="w-100" src="https://demo.htmlcodex.com/1362/ice-cream-shop-website-template/img/carousel-1.jpg" alt="Image" />
                        <div className="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div className="p-3" style={{ maxWidth: '900px' }}>
                                <h4 className="text-white text-uppercase mb-md-3">Traditional &amp; Delicious</h4>
                                <h1 className="display-3 text-white mb-md-4">Traditional Ice Cream Since 1950</h1>
                                <a href className="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div className="carousel-item">
                        <img className="w-100" src="img/carousel-2.jpg" alt="Image" />
                        <div className="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div className="p-3" style={{ maxWidth: '900px' }}>
                                <h4 className="text-white text-uppercase mb-md-3">Traditional &amp; Delicious</h4>
                                <h1 className="display-3 text-white mb-md-4">Made From Our Own Organic Milk</h1>
                                <a href className="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                {/* <a className="carousel-control-prev" href="#header-carousel" data-slide="prev">
                    <div className="btn btn-secondary px-0" style={{ width: '45px', height: '45px' }}>
                        <span className="carousel-control-prev-icon mb-n1" />
                    </div>
                </a>
                <a className="carousel-control-next" href="#header-carousel" data-slide="next">
                    <div className="btn btn-secondary px-0" style={{ width: '45px', height: '45px' }}>
                        <span className="carousel-control-next-icon mb-n1" />
                    </div>
                </a> */}
            </div>
        </div>

    );
}

export default Banner;