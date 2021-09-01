<template>
    <div class="container mb-3">
        <div class="row justify-content-center py-5">
            <div class="col-12 col-lg-5 col-md-7 col-sm-9">
                <div class="card border-0 shadow p-5">
                    <div class="card-title text-center my-3">
                        <h3>Sign IN</h3>
                    </div>
                    <form>
                        <div class="form-group">
                            <input
                                type="text"
                                id="disabledTextInput"
                                class="form-control"
                                placeholder="user email"
                            />
                        </div>
                        <div class="form-group">
                            <input
                                type="text"
                                id="disabledTextInput"
                                class="form-control"
                                placeholder="*********"
                            />
                        </div>
                        <div class="form-check">
                            <label
                                class="form-check-label"
                                for="disabledFieldsetCheck"
                            >
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="disabledFieldsetCheck"
                                />
                                &nbsp; Can't check this
                            </label>
                        </div>
                        <button
                            type="submit"
                            class="btn btn-outline-dark btn-round mt-2"
                        >
                            Войти
                        </button>
                        <div class="row-group text-right">
                            <label for="" class="font-weight-bold"
                                >Haven't You account?</label
                            >
                            <router-link
                                :to="{ name: 'auth-register' }"
                                class="list-unstyled"
                                >registration</router-link
                            >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
