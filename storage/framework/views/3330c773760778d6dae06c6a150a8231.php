<?php
    $seo = getPageSeoByKey('contact');
    $title = $seo->meta_title ?? 'Contact Andraos Construction | Denver, CO';
    $description = $seo->meta_description ?? 'Request an Commercial concrete, asphalt or masonry quote in Denver & the Front Range. Estimates in 3–5 days. Call or text (303) 915-3703.';
?>

<?php $__env->startSection('meta_title', $title); ?>
<?php $__env->startSection('meta_description', $description); ?>

<?php $__env->startSection('content'); ?>

<!-- ====================== PAGE HERO ====================== -->
    <header class="page-hero pb-5">
      <div class="page-hero__bg" data-bg="<?php echo e(asset('assets/images/gallery-02.jpg')); ?>" aria-hidden="true"></div>
      <div class="page-hero__scrim" aria-hidden="true"></div>
      <div class="container">
        <nav class="breadcrumb-mono mb-3" aria-label="Breadcrumb">
          <a href="/">Home</a> &nbsp;/&nbsp; Contact
        </nav>
        <h1>Request an Commercial Project Estimate</h1>
        <p class="lede on-dark mt-3 maxw-56">
          Detailed estimates in 3&ndash;5 business days. Same-day response for emergency
          property-management repairs.
        </p>
      </div>
    </header>


<!-- ════ CONTACT ════ -->
<section class="section bg-navy text-white" id="contact" style="border-top:1px solid rgba(255,255,255,.06)">
  <div class="container">
    <div class="row g-5 mb-5 reveal">
      <div class="col-lg-6">
        <div class="eyebrow on-dark">Get in Touch</div>
        <h2 class="ff-display display-lg mt-3 text-white">Start the Conversation</h2>
      </div>
      <div class="col-lg-6 d-flex align-items-end">
        <p class="lede" style="color:var(--slate-300)">Quotes in 3–5 business days. Emergencies same-day. Call us or
          send the scope below.</p>
      </div>
    </div>
    <div class="row g-5">
      <div class="col-lg-5">
        <div class="d-flex gap-3 pb-4 mb-4 border-bottom" style="border-color:rgba(255,255,255,.1)">
          <div class="contact-icon">☏</div>
          <div>
            <div class="field-label" style="color:rgba(255,255,255,.55)">Direct Line</div>
            <div class="ff-display fs-4 text-white"><a href="tel:(303) 915-3703" class="text-white">(303) 915-3703</a>
            </div>
            <div class="text-slate" style="font-size:13px;color:rgba(255,255,255,.6)!important">Mon–Fri · 8am – 5pm ·
              Speak with estimating.</div>
          </div>
        </div>
        <div class="d-flex gap-3 pb-4 mb-4 border-bottom" style="border-color:rgba(255,255,255,.1)">
          <div class="contact-icon">⌂</div>
          <div>
            <div class="field-label" style="color:rgba(255,255,255,.55)">Service Territory</div>
            <div class="ff-display fs-4 text-white">Denver Metro &amp; Front Range</div>
          </div>
        </div>
        <div class="d-flex gap-3">
          <div class="contact-icon">◷</div>
          <div>
            <div class="field-label" style="color:rgba(255,255,255,.55)">Established</div>
            <div class="ff-display fs-4 text-white">1993 · Licensed &amp; Insured</div>
            <div style="font-size:13px;color:rgba(255,255,255,.6)">Bonded for commercial. Certificates on request.</div>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="bg-white p-4 p-md-5" style="border-radius:4px">
          <form id="quoteForm" method="POST" novalidate>
            <?php echo csrf_field(); ?>

            <h3 class="ff-display" style="color:var(--navy-900);font-size:26px">
              Request an Commercial Estimate
            </h3>

            <p class="text-slate mb-4" style="font-size:13px">
              Reply within 1 business day · Site walks within the week.
            </p>

            <div class="row g-3">

              <div class="col-md-6">
                <div class="field-label">Full Name</div>
                <input type="text" name="full_name" class="form-control" required placeholder="Jane Doe">
              </div>

              <div class="col-md-6">
                <div class="field-label">Company / Property</div>
                <input type="text" name="company" class="form-control" placeholder="Required for commercial">
              </div>

              <div class="col-md-6">
                <div class="field-label">Email</div>
                <input type="email" name="email" class="form-control" required placeholder="you@company.com">
              </div>

              <div class="col-md-6">
                <div class="field-label">Phone</div>
                <input type="text" name="phone" class="form-control" placeholder="(303) 000-0000">
              </div>

              <div class="col-md-6">
                <div class="field-label">Scope</div>
                <select name="scope" class="form-select">
                  <option>Commercial Concrete</option>
                  <option>Asphalt Paving</option>
                  <option>Masonry</option>
                  <option>Snow Melt</option>
                  <option>HOA / Property Mgmt</option>
                  <option>Other</option>
                </select>
              </div>

              <div class="col-md-6">
                <div class="field-label">Approx. Size</div>
                <input type="text" name="approx_size" class="form-control" placeholder="e.g. 12,000 SF">
              </div>

              <div class="col-12">
                <div class="field-label">Project Scope & Schedule</div>
                <textarea name="message" rows="4" class="form-control"
                  placeholder="Describe the property, scope of work, and schedule."></textarea>
              </div>

              <div class="col-12">
                <button type="submit" class="btn btn-navy btn-arrow w-100">
                  Send Estimate Request
                </button>
              </div>

            </div>

            <div id="errorMessage" class="alert alert-danger mt-3 d-none"></div>

          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
$(document).ready(function () {

    $.validator.addMethod("lettersOnly", function(value, element) {
        return this.optional(element) || /^[A-Za-z]+(?:\s+[A-Za-z]+)*$/.test(value.trim());
    }, "Please enter only letters and spaces.");

    $.validator.addMethod("alphanumeric", function(value, element) {
        return this.optional(element) || /^[A-Za-z0-9\s,-]+$/.test(value.trim());
    }, "Please enter only letters, numbers, spaces, commas and dashes.");

    $.validator.addMethod("phoneUS", function(value, element) {
        return this.optional(element) || /^[\d\s\-\(\)]+$/.test(value.trim()) && value.replace(/\D/g, '').length >= 10;
    }, "Please enter a valid phone number (at least 10 digits).");

    $("#quoteForm").validate({

        rules: {
            full_name: {
                required: true,
                lettersOnly: true,
                minlength: 3,
                maxlength: 100
            },
            company: {
                required: true,
                maxlength: 255
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                phoneUS: true,
                minlength: 10,
                maxlength: 14
            },
            scope: {
                required: true
            },
            approx_size: {
                required: true,
                alphanumeric: true,
                minlength: 1,
                maxlength: 7
            },
            message: {
                required: true,
                minlength: 15,
                maxlength: 250
            }
        },

        messages: {
            full_name: {
                required: "Please enter your full name.",
                minlength: "Name must be at least 3 characters.",
                lettersOnly: "Name can only contain letters."
            },
            company: {
                required: "Please enter company/property name."
            },
            email: {
                required: "Please enter your email.",
                email: "Please enter a valid email address."
            },
            phone: {
                required: "Please enter your phone number.",
                minlength: "Phone number must be at least 10 digits.",
                maxlength: "Phone number is too long."
            },
            scope: {
                required: "Please select project scope."
            },
            approx_size: {
                required: "Please enter approximate project size."
            },
            message: {
                required: "Please describe your project.",
                minlength: "Please enter at least 20 characters."
            }
        },

        errorElement: "small",
        errorClass: "text-danger",

        errorPlacement: function (error, element) {
            error.insertAfter(element);
        },

        highlight: function (element) {
            $(element).addClass("is-invalid");
        },

        unhighlight: function (element) {
            $(element).removeClass("is-invalid");
        },

        submitHandler: function (form) {

            Swal.fire({
                title: "Confirm Submission",
                text: "Do you want to submit this estimate request?",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Yes, Submit",
                cancelButtonText: "Cancel",
                reverseButtons: true,
                confirmButtonColor: "#0d6efd",
                cancelButtonColor: "#d33"
            }).then((result) => {

                if (result.isConfirmed) {

                    $.ajax({

                        url: "<?php echo e(route('quote.submit')); ?>",
                        type: "POST",
                        data: $(form).serialize(),
                        dataType: "json",

                        beforeSend: function () {

                            Swal.fire({
                                title: "Submitting...",
                                text: "Please wait.",
                                allowOutsideClick: false,
                                didOpen: () => {
                                    Swal.showLoading();
                                }
                            });

                        },

                        success: function (response) {

                            Swal.fire({
                                icon: "success",
                                title: "Success",
                                text: "Quote request submitted successfully.",
                                confirmButtonColor: "#198754"
                            }).then(() => {
                                location.reload();
                            });

                        },

                        error: function (xhr) {

                            if (xhr.status === 422) {

                                let errors = xhr.responseJSON.errors;
                                let errorHtml = "";

                                $.each(errors, function (key, value) {
                                    errorHtml += value[0] + "<br>";
                                });

                                $("#errorMessage").html(errorHtml).removeClass("d-none");

                            } else {

                                let serverMsg = xhr.responseJSON?.message || "Something went wrong. Please try again.";
                                $("#errorMessage").text(serverMsg).removeClass("d-none");

                            }

                        }

                    });

                }

            });

            return false;
        }

    });

});
</script>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.body.classList.add('page-contact');
});
</script>
<?php $__env->stopPush(); ?>


<?php $__env->startPush('styles'); ?>
<style>
label.error,
small.error,
small.text-danger {
    color: #dc3545;
    font-size: 13px;
    margin-top: 5px;
    display: block;
}

.is-invalid {
    border-color: #dc3545 !important;
    box-shadow: none;
}
</style>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\andraosconstruction\resources\views/pages/contact.blade.php ENDPATH**/ ?>