

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Login')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    	<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(<?php echo e(asset('metronic-template/v8/assets/media/illustrations/development-hd.png')); ?>)">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<!--begin::Logo-->
					<a href="#" class="mb-12">
						<img alt="Logo" src="<?php echo e(asset('metronic-template/v8/assets/media/logos/sumbar-market-logo-2-2.png')); ?>" class="h-45px" />
					</a>
					<!--end::Logo-->
					<!--begin::Wrapper-->
					<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
						<form method="POST" action="<?php echo e(route('login', app()->getLocale())); ?>" class="form w-100" >
							<?php echo csrf_field(); ?>
							<!--begin::Heading-->
							<div class="text-center mb-10">
								<!--begin::Title-->
								<h1 class="text-dark mb-3"><?php echo e(__('Login')); ?></h1>
								<!--end::Title-->
								<!--begin::Link-->
								<div class="text-gray-400 fw-bold fs-4"><?php echo e(__('New Here?')); ?>

								<a href="<?php echo e(route('register', app()->getLocale())); ?>" class="link-primary fw-bolder"><?php echo e(__('Create an Account')); ?></a></div>
								<!--end::Link-->
							</div>
							<!--begin::Heading-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label fs-6 fw-bolder text-dark"><?php echo e(__('Email Address')); ?></label>
								<!--end::Label-->
								<!--begin::Input-->
								<input id="email" class="form-control form-control-lg form-control-solid <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="email" name="email" autocomplete="on" placeholder="<?php echo e(__('Email Address')); ?>"  required />
								<!--end::Input-->
				
								<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
									<div class="fv-plugins-message-container invalid-feedback">
										<div data-field="email" data-validator="notEmpty"><?php echo e($message); ?></div>
									</div>
								<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack mb-2">
									<!--begin::Label-->
									<label class="form-label fw-bolder text-dark fs-6 mb-0"><?php echo e(__('Password')); ?></label>
									<!--end::Label-->
									<!--begin::Link-->
									<a href="<?php echo e(route('password.request', app()->getlocale() )); ?>" class="link-primary fs-6 fw-bolder"><?php echo e(__('Forgot Your Password?')); ?></a>
									<!--end::Link-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Input-->
								<input id="password" class="form-control form-control-lg form-control-solid <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="password" name="password" autocomplete="on" placeholder="<?php echo e(__('Password')); ?>" required />
								<!--end::Input-->

								<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
									<div class="fv-plugins-message-container invalid-feedback">
										<div data-field="email" data-validator="notEmpty"><?php echo e($message); ?></div>
									</div>
								<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center">
								<!--begin::Submit button-->
								<button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
									<span class="indicator-label"><?php echo e(__('Login')); ?></span>
									
								</button>
								<!--end::Submit button-->
								<!--begin::Separator-->
								<div class="text-center text-muted text-uppercase fw-bolder mb-5"><?php echo e(__('or')); ?></div>
								<!--end::Separator-->
								<!--begin::Google link-->
								<a href="<?php echo e(route('login.google', app()->getlocale())); ?>" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
								<img alt="Logo" src="<?php echo e(asset('metronic-template/v8/assets/media/svg/brand-logos/google-icon.svg')); ?>" class="h-20px me-3" /><?php echo e(trans('Continue with', ['social' => 'Google'])); ?></a>
								<!--end::Google link-->
								<!--begin::GitHub link-->
								<a href="<?php echo e(route('login.github', app()->getlocale())); ?>" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
								<img alt="Logo" src="<?php echo e(asset('metronic-template/v8/assets/media/svg/brand-logos/github.svg')); ?>" class="h-20px me-3" /><?php echo e(__('Continue with', ['social' => 'GitHub'])); ?></a>
								<!--end::GitHub link-->
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="d-flex flex-center flex-column-auto">
					<!--begin::Links-->
					<div class="d-flex align-items-center fw-bold fs-6">
						<select class="form-select" id="changeLanguage">
							<?php $__currentLoopData = Config::get('languages'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($lang); ?>" <?php echo e(Request::segment(1) == $lang ? 'selected' : ''); ?>><?php echo e($language['name']); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
					<!--end::Links-->
				</div>
				<div class="p-19"></div>
				<!--end::Footer-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Main-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ubuntu/Documents/domains/ecommerce/resources/views/auth/login.blade.php ENDPATH**/ ?>