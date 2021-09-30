<style>
    html,
    body {
        padding: 0;
        margin: 0;
    }

    .form-control.form-control-solid {
        background-color: #f5f8fa;
        border-color: #f5f8fa;
        color: #5e6278;
        transition: color .2s ease, background-color .2s ease;
    }

    .form-control {
        box-shadow: none !important;
    }

    .text-center {
        text-align: center !important;
    }

    .fs-2qx {
        font-size: calc(1.35rem + 1.2vw) !important;
    }

    .my-2 {
        margin-top: .5rem !important;
        margin-bottom: .5rem !important;
    }

    .mx-1 {
        margin-right: .25rem !important;
        margin-left: .25rem !important;
    }

    .h-60px {
        height: 60px !important;
    }

    .w-60px {
        width: 60px !important;
    }

    .border-primary {
        border-color: #009ef7 !important;
    }

    .form-control {
        /* display: block; */
        width: 100%;
        padding: .75rem 1rem;
        font-size: 1.1rem;
        font-weight: 500;
        line-height: 1.5;
        color: #181c32;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #e4e6ef;
        border-top-color: rgb(228, 230, 239);
        border-right-color: rgb(228, 230, 239);
        border-bottom-color: rgb(228, 230, 239);
        border-left-color: rgb(228, 230, 239);
        appearance: none;
        border-radius: .475rem;
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, .075);
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }

    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

</style>

<div
    style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
        style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
        <tbody>
            <tr>
                <td align="center" valign="center" style="text-align:center;">
                    <a href="https://azykharytlar.gov.tm" rel="noopener" target="_blank">
                        <img src="<?php echo e(asset('metronic-template/v7/assets/media/logos/azykharytlar-logo-only-text-blue.svg')); ?>"
                            style="height: 75px" alt="logo">
                    </a>
                        

            <tr>
                <td align="left" valign="center">
                    <div
                        style="text-align:left; margin: 13px 20px; padding: 40px; background-color:#ffffff; border-radius: 10px">
                        <!--begin:Email content-->
                        <div style="padding-bottom: 30px; font-size: 17px;">
                            <strong>Hoşgeldiňiz <?php echo e($data['name']); ?>!</strong>
                        </div>
                        <div style="padding-bottom: 30px">Hasabyňyzy işjeňleşdirmek üçin e-poçta salgyňyzy barlamak üçin
                            aşakdaky düwmä basyň. Işledilenden soň, web-sahypamyza girip bilersiňiz.</div>
                        <div style="padding-bottom: 20px">Bu paroly täzeden dikeltmek baglanyşygy 5 minutda gutarar.
                            Paroly täzeden dikeltmegi talap etmedik bolsaňyz, mundan başga çäre görülmeli däl.</div>
                        <div style="border-bottom: 1px solid #eeeeee; margin: 1px 0"></div>
                        <div style="padding: 40px 20px; word-wrap: break-all;">

                            <div class="mt-5">
                                <!--begin::Label-->
                                <div class="fw-bolder text-center text-dark fs-6 mb-1 ms-1"
                                    style="padding-bottom: 30px">6 sany howpsuzlyk koduňyzy
                                    ýazyň</div>
                                <!--end::Label-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-wrap flex-stack">
                                    <?php for($i=0; $i<6; $i++): ?> <input type="text"
                                        class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2"
                                        value="<?php echo e($data['strRand'][$i]); ?>">
                                    <?php endfor; ?>
                                </div>
                                <!--begin::Input group-->
                            </div>
                        </div>
                        <div style="border-bottom: 1px solid #eeeeee; margin: 1px 0;"></div>

                        <div class="fw-bolder text-center text-dark fs-6 mb-1 ms-1" style="padding: 30px">ýa-da
                            awtomatiki ýagdaýda düwmäni basyp kody tassyklaň</div>
                        <div style="padding-bottom: 40px; text-align:center;">
                            <form
                                action="<?php echo e(route('verification.send', [app()->getlocale(), $data['verification_code'] ])); ?>"
                                method="post">
                                <button rel="noopener"
                                    style="cursor: pointer;text-decoration:none;display:inline-block;text-align:center;padding:0.75575rem 1.3rem;font-size:0.925rem;line-height:1.5;border-radius:0.35rem;color:#ffffff;background-color:#009EF7;border:0px;margin-right:0.75rem!important;font-weight:600!important;outline:none!important;vertical-align:middle"
                                    target="_blank">Hasaby işjeňleşdiriň</button>
                            </form>
                        </div>
                        <div class="mb-10 px-md-10">
                            <!--end:Email content-->
                            <div style="padding-bottom: 30px">Hormat bilen,
                                <br>azykharytlar.gov.tm
            <tr>
                <td align="center" valign="center"
                    style="font-size: 13px; text-align:center;padding: 20px; color: #6d6e7c;">
                    <p>Türkmenistan Aşgabat şäheri D.Azady köçe</p>
                    <p>Copyright &copy
                        <a href="https://azykharytlar.gov.tm" rel="noopener" target="_blank">azykharytlar.gov.tm</a>.
                    </p>
                </td>
            </tr></br>
</div>
</div>

</div>
</td>
</tr>
</img>
</a>
</td>
</tr>
</tbody>
</table>
</div>
<?php /**PATH /home/ubuntu/Documents/domains/ecommerce/resources/views/mail/register-email.blade.php ENDPATH**/ ?>