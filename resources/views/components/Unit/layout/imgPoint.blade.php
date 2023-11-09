<div class="container-fluid p-0">
    <div class="row d-flex justify-content-center p-0">
        <div class="col-lg-12 col-12 p-0 position-relative">
            <div class="image-container position-relative markPoint">
                <img src="{{ asset('assets/images/image 43.png') }}" class="imgpoint" alt="" width="100%" class="p-0">
                <div class="markPoints" id="markPoints"></div>
            </div>
            <a class="circle-button zoom fnt-30 " style="padding-top: 7px;position:absolute;bottom:5%;right:5%"><i
                    class="bi bi-arrows-fullscreen"></i></a>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="pointModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable d-flex justify-content-center">
                <div class="modal-content modal-data-mapping">
                    <div class="image-container">
                        <div class="first d-grid align-content-between" style="height: 100%">
                            <div class="d-flex justify-content-end">
                                <img src="{{ asset('assets/images/logo01 1.png') }}" alt="" width="60px"
                                    height="60px" class="" style="border-radius: 6px">
                            </div>
                        </div>
                        <img src="{{ asset('assets/images/image 41.png') }}" alt="" class="img p-0">
                    </div>
                    <div class="modal-body">
                        <div class="row g-2 mb-3">
                            <div class="col-md-12 d-flex align-items-center floor-status mb-1">
                                <svg class="me-2 floor-status-modal" xmlns="http://www.w3.org/2000/svg" width="10"
                                    height="10" viewBox="0 0 10 10" fill="none">
                                    <circle cx="5" cy="5" r="5" fill="#43A047" />
                                </svg>
                                <span class="floor-status-text"></span>
                            </div>
                            <div class="col-6 p-0 text-start">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M6.21603 22.7999C6.04803 22.6799 5.85603 22.5839 5.71203 22.4399C5.30403 22.0559 4.92003 21.6599 4.53603 21.2639C4.15203 20.8799 4.15203 20.4959 4.54803 20.1119C4.95603 19.7039 5.37603 19.2839 5.78403 18.8759C6.14403 18.5279 6.56403 18.4919 6.86403 18.7799C7.16403 19.0799 7.14003 19.4999 6.79203 19.8599C6.76803 19.8839 6.73203 19.9199 6.69603 19.9679C11.184 19.9679 15.66 19.9679 20.148 19.9679C20.064 19.8839 19.992 19.8119 19.92 19.7279C19.692 19.4519 19.716 19.0439 19.968 18.7919C20.208 18.5399 20.628 18.4919 20.892 18.7319C21.42 19.2239 21.936 19.7399 22.428 20.2679C22.656 20.5079 22.644 20.8919 22.416 21.1319C21.924 21.6479 21.42 22.1399 20.916 22.6439C20.844 22.7159 20.724 22.7519 20.628 22.8119C20.52 22.8119 20.4 22.8119 20.292 22.8119C20.28 22.7999 20.268 22.7759 20.256 22.7759C19.728 22.5359 19.62 22.0079 20.016 21.5759C20.064 21.5279 20.1 21.4799 20.16 21.4199C15.66 21.4199 11.196 21.4199 6.70803 21.4199C6.80403 21.5159 6.88803 21.5999 6.94803 21.6839C7.24803 22.0919 7.08003 22.5599 6.54003 22.7999C6.40803 22.7999 6.31203 22.7999 6.21603 22.7999Z"
                                        fill="#CBC4C7" />
                                    <path
                                        d="M22.5601 9.19178C22.5601 11.5558 22.5601 13.9198 22.5601 16.2718C22.5601 16.3918 22.5601 16.5238 22.5361 16.6438C22.4641 16.9438 22.1881 17.1358 21.8401 17.1478C21.4561 17.1598 21.0841 17.1478 20.7001 17.1478C16.4641 17.1478 12.2281 17.1478 7.98008 17.1478C7.89608 17.1478 7.81208 17.1478 7.72808 17.1358C7.36808 17.1118 7.10408 16.8478 7.06808 16.4878C7.05608 16.4158 7.06808 16.3318 7.06808 16.2598C7.06808 11.5318 7.06808 6.80378 7.06808 2.06378C7.06808 1.42778 7.32008 1.17578 7.94408 1.17578C12.5281 1.17578 17.1121 1.17578 21.6961 1.17578C22.3201 1.17578 22.5601 1.42778 22.5601 2.03978C22.5601 4.43978 22.5601 6.81578 22.5601 9.19178ZM21.1321 15.7438C21.1321 13.2358 21.1321 10.7398 21.1321 8.24378C20.4361 8.24378 19.7521 8.24378 19.0801 8.24378C18.7201 8.24378 18.4441 8.03978 18.3601 7.73978C18.2281 7.27178 18.5521 6.85178 19.0561 6.83978C19.6801 6.82778 20.3041 6.83978 20.9281 6.83978C21.0001 6.83978 21.0601 6.83978 21.1201 6.83978C21.1201 5.41178 21.1201 4.01978 21.1201 2.61578C18.1441 2.61578 15.1921 2.61578 12.2281 2.61578C12.2281 4.01978 12.2281 5.42378 12.2281 6.83978C12.3121 6.83978 12.3841 6.83978 12.4681 6.83978C13.4041 6.83978 14.3401 6.83978 15.2761 6.83978C15.4561 6.83978 15.6481 6.83978 15.8281 6.85178C16.1161 6.87578 16.3441 7.07978 16.4161 7.34378C16.5481 7.81178 16.2121 8.24378 15.6961 8.24378C14.6161 8.24378 13.5361 8.24378 12.4441 8.24378C12.3721 8.24378 12.3001 8.24378 12.2161 8.24378C12.2161 8.90378 12.2161 9.53978 12.2161 10.1758C12.2161 10.2718 12.2161 10.3678 12.2041 10.4638C12.1441 10.8718 11.7601 11.1358 11.3521 11.0278C11.0041 10.9438 10.8121 10.6678 10.8121 10.2358C10.8121 7.77578 10.8121 5.31578 10.8121 2.85578C10.8121 2.78378 10.8121 2.69978 10.8121 2.61578C10.0201 2.61578 9.25208 2.61578 8.47208 2.61578C8.47208 6.99578 8.47208 11.3638 8.47208 15.7438C9.25208 15.7438 10.0201 15.7438 10.8121 15.7438C10.8121 15.6598 10.8121 15.5878 10.8121 15.5038C10.8121 14.9038 10.8121 14.2918 10.8121 13.6918C10.8121 13.2598 11.1001 12.9478 11.4961 12.9358C11.8801 12.9238 12.1921 13.2238 12.2161 13.6558C12.2281 13.8238 12.2161 13.9918 12.2161 14.1598C12.2161 14.6878 12.2161 15.2038 12.2161 15.7438C15.2041 15.7438 18.1681 15.7438 21.1321 15.7438Z"
                                        fill="#CBC4C7" />
                                    <path
                                        d="M2.78397 3.63598C2.74797 3.68398 2.71197 3.74398 2.66397 3.77998C2.33997 4.09198 1.91997 4.10398 1.63197 3.80398C1.35597 3.52798 1.36797 3.09598 1.66797 2.78398C1.93197 2.50798 2.20797 2.23198 2.48397 1.96798C2.65197 1.78798 2.83197 1.61998 3.01197 1.45198C3.34797 1.12798 3.74397 1.12798 4.07997 1.45198C4.53597 1.89598 4.97997 2.33998 5.42397 2.79598C5.73597 3.11998 5.74797 3.53998 5.45997 3.82798C5.17197 4.11598 4.76397 4.10398 4.43997 3.80398C4.39197 3.75598 4.34397 3.70798 4.27197 3.64798C4.27197 7.83598 4.27197 11.976 4.27197 16.176C4.34397 16.104 4.40397 16.056 4.45197 16.008C4.76397 15.72 5.17197 15.708 5.44797 15.996C5.73597 16.284 5.73597 16.704 5.43597 17.016C4.97997 17.484 4.52397 17.94 4.06797 18.384C3.75597 18.696 3.35997 18.696 3.03597 18.384C2.56797 17.928 2.11197 17.472 1.66797 17.016C1.37997 16.716 1.37997 16.296 1.64397 16.008C1.91997 15.72 2.33997 15.72 2.66397 16.02C2.71197 16.068 2.74797 16.14 2.79597 16.212C2.81997 16.2 2.83197 16.176 2.85597 16.164C2.85597 12.012 2.85597 7.85998 2.85597 3.69598C2.81997 3.64798 2.79597 3.64798 2.78397 3.63598Z"
                                        fill="#CBC4C7" />
                                </svg>
                                <span class="modal-text-secondary"">
                                    28.5 ตร.ม.
                                </span>
                            </div>
                            <div class="col-6 p-0 text-start">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M22.7999 12.784C22.7999 14.368 22.7999 15.964 22.7999 17.548C22.5359 18.232 21.9239 18.052 21.3959 18.088C21.3959 18.772 21.3959 19.432 21.3959 20.092C21.3959 20.632 21.1199 20.896 20.5919 20.896C19.7159 20.896 18.8519 20.896 17.9759 20.896C17.4359 20.896 17.1719 20.632 17.1719 20.092C17.1719 19.492 17.1719 18.892 17.1719 18.304C17.1719 18.232 17.1719 18.172 17.1599 18.1C13.7159 18.1 10.2959 18.1 6.83991 18.1C6.83991 18.184 6.83991 18.244 6.83991 18.316C6.83991 18.904 6.83991 19.492 6.83991 20.092C6.83991 20.644 6.57591 20.908 6.02391 20.908C5.15991 20.908 4.29591 20.908 3.43191 20.908C2.87991 20.908 2.61591 20.644 2.61591 20.092C2.61591 19.492 2.61591 18.892 2.61591 18.304C2.61591 18.232 2.61591 18.172 2.61591 18.1C2.35191 18.1 2.13591 18.112 1.90791 18.1C1.47591 18.076 1.21191 17.788 1.21191 17.356C1.21191 15.964 1.21191 14.572 1.21191 13.18C1.21191 12.616 1.40391 12.112 1.81191 11.716C2.03991 11.488 2.32791 11.332 2.62791 11.116C2.62791 10 2.62791 8.836 2.62791 7.684C2.62791 7.132 2.69991 6.604 2.93991 6.112C3.59991 4.696 4.71591 4 6.25191 4C10.0799 4 13.9199 4 17.7479 4C17.9759 4 18.2159 4.012 18.4439 4.048C20.0039 4.264 21.3119 5.668 21.3719 7.228C21.4079 8.044 21.3959 8.872 21.3959 9.7C21.3959 10.18 21.3959 10.672 21.3959 11.14C22.1039 11.536 22.3079 11.704 22.5359 12.136C22.6439 12.352 22.7159 12.568 22.7999 12.784ZM5.42391 11.032C5.42391 10.828 5.42391 10.624 5.42391 10.432C5.42391 9.148 6.33591 8.224 7.61991 8.224C8.57991 8.224 9.52791 8.224 10.4879 8.224C10.8959 8.224 11.2799 8.296 11.6399 8.512C11.7599 8.584 11.8799 8.668 12.0119 8.764C12.4199 8.416 12.8759 8.236 13.4039 8.236C14.4599 8.236 15.5159 8.224 16.5719 8.248C16.8479 8.26 17.1479 8.344 17.3999 8.464C18.1919 8.86 18.5759 9.544 18.5879 10.42C18.5879 10.624 18.5879 10.84 18.5879 11.032C19.0679 11.032 19.5239 11.032 19.9919 11.032C19.9919 10.96 19.9919 10.912 19.9919 10.852C19.9919 9.772 19.9919 8.692 19.9919 7.6C19.9919 6.316 19.0679 5.404 17.7839 5.404C13.9439 5.404 10.0919 5.404 6.25191 5.404C4.95591 5.404 4.04391 6.316 4.04391 7.624C4.04391 8.692 4.04391 9.76 4.04391 10.828C4.04391 10.9 4.04391 10.96 4.04391 11.044C4.49991 11.032 4.94391 11.032 5.42391 11.032ZM2.61591 16.66C8.86791 16.66 15.1199 16.66 21.3839 16.66C21.3839 16.192 21.3839 15.748 21.3839 15.28C15.1319 15.28 8.87991 15.28 2.61591 15.28C2.61591 15.748 2.61591 16.192 2.61591 16.66ZM21.3959 13.84C21.3959 13.6 21.3959 13.384 21.3959 13.168C21.3959 12.952 21.3239 12.772 21.1559 12.628C20.9759 12.472 20.7719 12.448 20.5439 12.448C14.8439 12.448 9.15591 12.448 3.45591 12.448C3.38391 12.448 3.31191 12.448 3.23991 12.448C2.91591 12.484 2.65191 12.712 2.61591 13.036C2.59191 13.3 2.61591 13.564 2.61591 13.84C8.87991 13.84 15.1199 13.84 21.3959 13.84ZM6.85191 11.032C8.32791 11.032 9.80391 11.032 11.2919 11.032C11.2919 10.792 11.2919 10.576 11.2919 10.348C11.2799 9.928 11.0039 9.64 10.5959 9.628C9.57591 9.616 8.55591 9.616 7.53591 9.628C7.18791 9.628 6.89991 9.868 6.86391 10.18C6.82791 10.456 6.85191 10.744 6.85191 11.032ZM12.7199 11.032C14.2079 11.032 15.6719 11.032 17.1599 11.032C17.1599 10.792 17.1719 10.564 17.1599 10.336C17.1359 9.928 16.8719 9.64 16.4639 9.64C15.4439 9.628 14.4239 9.628 13.4039 9.64C13.0439 9.64 12.7439 9.904 12.7199 10.228C12.6959 10.492 12.7199 10.756 12.7199 11.032ZM4.03191 18.088C4.03191 18.568 4.03191 19.024 4.03191 19.48C4.49991 19.48 4.95591 19.48 5.41191 19.48C5.41191 19.012 5.41191 18.544 5.41191 18.088C4.94391 18.088 4.49991 18.088 4.03191 18.088ZM19.9679 18.1C19.4999 18.1 19.0439 18.1 18.5879 18.1C18.5879 18.568 18.5879 19.024 18.5879 19.48C19.0559 19.48 19.5119 19.48 19.9679 19.48C19.9679 19.012 19.9679 18.556 19.9679 18.1Z"
                                        fill="#CBC4C7" />
                                </svg>
                                <span class="modal-text-secondary">1</span>
                            </div>
                            <div class="col-6 p-0 text-start modal-text-h4">
                                A12-1912
                            </div>
                            <div class="col-6 p-0 text-start modal-text-h5">
                                จอง 2,900฿
                            </div>
                            <div class="col-6 p-0 text-start modal-text-primary-h5">
                                ฿1,700,000
                            </div>
                            <div class="col-6 p-0 text-start modal-text-secondary">
                                <del>฿1,700,000</del>
                            </div>
                            <div class="col-md p-0 text-start modal-text-h4">
                                คอนโดมิเนียม เดอะ สเตจ มายด์สเคป รัชดา - ห้วยขวาง
                            </div>
                        </div>

                        <hr>

                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-modal" data-bs-dismiss="modal">ดูยูนิตนี้</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row d-flex justify-content-center p-0">
    <div class="col-lg-10 col-md-12">
        <div class="row d-flex justify-content-center text-center fnt-20">
            <div class="col d-flex justify-content-center align-items-center floor-status">
                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                    fill="none">
                    <circle cx="5" cy="5" r="5" fill="#43A047" />
                </svg>
                เปิดจอง
            </div>
            <div class="col d-flex justify-content-center align-items-center floor-status">
                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                    viewBox="0 0 10 10" fill="none">
                    <circle cx="5" cy="5" r="5" fill="#FFB300" />
                </svg>
                กำลังมีคิวจอง
            </div>
            <div class="col d-flex justify-content-center align-items-center floor-status">
                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                    viewBox="0 0 10 10" fill="none">
                    <circle cx="5" cy="5" r="5" fill="#EC161D" />
                </svg>
                ขายแล้ว
            </div>
        </div>
    </div>
</div>