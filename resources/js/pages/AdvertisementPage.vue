<template>
    <main class="main">
        <div class="page-content">
            <div class="checkout">
                <div class="container">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <label>Phone Number</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            required
                                        />
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Code verify</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label>Name</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            required
                                        />
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Surname</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            required
                                        />
                                    </div>
                                    <div class="col-sm-4">
                                        <label>LastName</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <label>Region</label>
                                        <select
                                            type="text"
                                            class="form-control"
                                        >
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Price</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            required
                                        />
                                    </div>
                                </div>
                                <label>Categories</label>
                                <select type="text" class="form-control">
                                    <option value=""></option>
                                </select>

                                <label>Title</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    required
                                />

                                <label>text</label>
                                <textarea
                                    class="form-control"
                                    placeholder="House number and Street name"
                                    required
                                ></textarea>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <label>image</label>
                                        <div
                                            class="file-uploader"
                                            title="upload image post"
                                        >
                                            <input
                                                type="file"
                                                name=""
                                                id="btn-imageuploader"
                                                class="btn"
                                            />
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="40"
                                                height="40"
                                                fill="currentColor"
                                                class="bi bi-cloud-plus"
                                                viewBox="0 0 16 16"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"
                                                />
                                                <path
                                                    d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"
                                                />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <aside class="col-lg-3">
                                <div class="summary">
                                    <div
                                        class="custom-control custom-checkbox mb-3"
                                    >
                                        <input
                                            type="checkbox"
                                            class="custom-control-input"
                                            id="checkout-create-acc"
                                        />
                                        <label
                                            class="custom-control-label"
                                            for="checkout-create-acc"
                                            >ТОП</label
                                        >
                                    </div>
                                    <div
                                        class="accordion-summary"
                                        id="accordion-payment"
                                    >
                                        <div class="card">
                                            <div
                                                class="card-header"
                                                id="heading-1"
                                            >
                                                <h2 class="card-title">
                                                    <a
                                                        role="button"
                                                        data-toggle="collapse"
                                                        href="#collapse-1"
                                                        aria-expanded="true"
                                                        aria-controls="collapse-1"
                                                    >
                                                        Снятие денег
                                                    </a>
                                                </h2>
                                            </div>
                                            <div
                                                id="collapse-1"
                                                class="collapse show"
                                                aria-labelledby="heading-1"
                                                data-parent="#accordion-payment"
                                            >
                                                <div class="card-body">
                                                    Make your payment directly
                                                    into our bank account.
                                                    Please use your Order ID as
                                                    the payment reference. Your
                                                    order will not be shipped
                                                    until the funds have cleared
                                                    in our account.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div
                                                class="card-header"
                                                id="heading-2"
                                            >
                                                <h2 class="card-title">
                                                    <a
                                                        class="collapsed"
                                                        role="button"
                                                        data-toggle="collapse"
                                                        href="#collapse-2"
                                                        aria-expanded="false"
                                                        aria-controls="collapse-2"
                                                    >
                                                        С карты
                                                    </a>
                                                </h2>
                                            </div>
                                            <div
                                                id="collapse-2"
                                                class="collapse"
                                                aria-labelledby="heading-2"
                                                data-parent="#accordion-payment"
                                            >
                                                <div class="card-body">
                                                    Ipsum dolor sit amet,
                                                    consectetuer adipiscing
                                                    elit. Donec odio. Quisque
                                                    volutpat mattis eros. Nullam
                                                    malesuada erat ut turpis.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div
                                                class="card-header"
                                                id="heading-3"
                                            >
                                                <h2 class="card-title">
                                                    <a
                                                        class="collapsed"
                                                        role="button"
                                                        data-toggle="collapse"
                                                        href="#collapse-3"
                                                        aria-expanded="false"
                                                        aria-controls="collapse-3"
                                                    >
                                                        С номера телефона
                                                    </a>
                                                </h2>
                                            </div>
                                            <div
                                                id="collapse-3"
                                                class="collapse"
                                                aria-labelledby="heading-3"
                                                data-parent="#accordion-payment"
                                            >
                                                <div class="card-body">
                                                    Quisque volutpat mattis
                                                    eros. Lorem ipsum dolor sit
                                                    amet, consectetuer
                                                    adipiscing elit. Donec odio.
                                                    Quisque volutpat mattis
                                                    eros.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div
                                                class="card-header"
                                                id="heading-4"
                                            >
                                                <h2 class="card-title">
                                                    <a
                                                        class="collapsed"
                                                        role="button"
                                                        data-toggle="collapse"
                                                        href="#collapse-4"
                                                        aria-expanded="false"
                                                        aria-controls="collapse-4"
                                                    >
                                                        Наличие
                                                    </a>
                                                </h2>
                                            </div>
                                            <div
                                                id="collapse-4"
                                                class="collapse"
                                                aria-labelledby="heading-4"
                                                data-parent="#accordion-payment"
                                            >
                                                <div class="card-body">
                                                    Nullam malesuada erat ut
                                                    turpis. Suspendisse urna
                                                    nibh, viverra non, semper
                                                    suscipit, posuere a, pede.
                                                    Donec nec justo eget felis
                                                    facilisis fermentum.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div
                                                class="card-header"
                                                id="heading-5"
                                            >
                                                <h2 class="card-title">
                                                    <a
                                                        class="collapsed"
                                                        role="button"
                                                        data-toggle="collapse"
                                                        href="#collapse-5"
                                                        aria-expanded="false"
                                                        aria-controls="collapse-5"
                                                    >
                                                        С кашелёк
                                                    </a>
                                                </h2>
                                            </div>
                                            <div
                                                id="collapse-5"
                                                class="collapse"
                                                aria-labelledby="heading-5"
                                                data-parent="#accordion-payment"
                                            >
                                                <div class="card-body">
                                                    Donec nec justo eget felis
                                                    facilisis fermentum.Lorem
                                                    ipsum dolor sit amet,
                                                    consectetuer adipiscing
                                                    elit. Donec odio. Quisque
                                                    volutpat mattis eros. Lorem
                                                    ipsum dolor sit ame.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button
                                        type="submit"
                                        class="btn btn-outline-primary-2 btn-order btn-block mt-3"
                                    >
                                        <span class="btn-text"
                                            >Place Order</span
                                        >
                                        <span class="btn-hover-text"
                                            >Proceed to Checkout</span
                                        >
                                    </button>
                                </div>
                            </aside>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</template>
<style scoped>
.file-uploader {
    width: 200px;
    height: 100px;
    box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.05);
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f9f9f9;
    color: #b4a4a4;
    cursor: pointer;
    position: relative;
}

#btn-imageuploader {
    border: none;
    background-color: transparent;
    outline: none;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    opacity: 0;
}
</style>
