import React from 'react'


const Product = () => {
    return (<div className="container-fluid py-5">
        <div className="container py-5">
            <div className="row">
                <div className="col-lg-6">
                    <h1 className="section-title position-relative mb-5">Best Prices We Offer For Ice Cream Lovers</h1>
                </div>
                <div className="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0" />
            </div>
            <div className="row">
                <div className="col-12">
                    <div className="owl-carousel product-carousel grid grid-cols-4">
                        <div className="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div className="bg-primary mt-n5 py-3" style={{ width: '80px' }}>
                                <h4 className="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div className="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style={{ width: '150px', height: '150px' }}>
                                <img className="rounded-circle w-100 h-100" src="https://demo.htmlcodex.com/1362/ice-cream-shop-website-template/img/product-1.jpg" style={{ objectFit: 'cover' }} />
                            </div>
                            <h5 className="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href className="btn btn-sm btn-secondary">View More</a>
                        </div>
                        <div className="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div className="bg-primary mt-n5 py-3" style={{ width: '80px' }}>
                                <h4 className="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div className="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style={{ width: '150px', height: '150px' }}>
                                <img className="rounded-circle w-100 h-100" src="https://demo.htmlcodex.com/1362/ice-cream-shop-website-template/img/product-1.jpg" style={{ objectFit: 'cover' }} />
                            </div>
                            <h5 className="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href className="btn btn-sm btn-secondary">View More</a>
                        </div>
                        <div className="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div className="bg-primary mt-n5 py-3" style={{ width: '80px' }}>
                                <h4 className="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div className="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style={{ width: '150px', height: '150px' }}>
                                <img className="rounded-circle w-100 h-100" src="https://demo.htmlcodex.com/1362/ice-cream-shop-website-template/img/product-1.jpg" style={{ objectFit: 'cover' }} />
                            </div>
                            <h5 className="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href className="btn btn-sm btn-secondary">View More</a>
                        </div>
                        <div className="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div className="bg-primary mt-n5 py-3" style={{ width: '80px' }}>
                                <h4 className="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div className="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style={{ width: '150px', height: '150px' }}>
                                <img className="rounded-circle w-100 h-100" src="https://demo.htmlcodex.com/1362/ice-cream-shop-website-template/img/product-1.jpg" style={{ objectFit: 'cover' }} />
                            </div>
                            <h5 className="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href className="btn btn-sm btn-secondary">View More</a>
                        </div>
                        {/* <div className="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div className="bg-primary mt-n5 py-3" style={{ width: '80px' }}>
                                <h4 className="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div className="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style={{ width: '150px', height: '150px' }}>
                                <img className="rounded-circle w-100 h-100" src="img/product-5.jpg" style={{ objectFit: 'cover' }} />
                            </div>
                            <h5 className="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href className="btn btn-sm btn-secondary">View More</a>
                        </div> */}
                    </div>
                </div>
            </div>
        </div>
    </div>);
}

export default Product;