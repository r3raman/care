"use strict";

// Class definition
var KTWizard3 = function () {
	// Base elements
	var _wizardEl;
	var _formEl;
	var _wizardObj;
	var _validations = [];

	// Private functions
	var _initWizard = function () {
		// Initialize form wizard
		_wizardObj = new KTWizard(_wizardEl, {
			startStep: 1, // initial active step number
			clickableSteps: true  // allow step clicking
		});

		// Validation before going to next page
		_wizardObj.on('change', function (wizard) {
			if (wizard.getStep() > wizard.getNewStep()) {
				return; // Skip if stepped back
			}

			// Validate form before change wizard step
			var validator = _validations[wizard.getStep() - 1]; // get validator for currnt step

			if (validator) {
				validator.validate().then(function (status) {
					if (status == 'Valid') {
						wizard.goTo(wizard.getNewStep());

						KTUtil.scrollTop();
					} else {
						// Swal.fire({
						// 	text: "Sorry, looks like there are some errors detected, please try again.",
						// 	icon: "error",
						// 	buttonsStyling: false,
						// 	confirmButtonText: "Ok, got it!",
						// 	customClass: {
						// 		confirmButton: "btn font-weight-bold btn-light"
						// 	}
						// }).then(function () {
							KTUtil.scrollTop();
						//});
					}
				});
			}

			return false;  // Do not change wizard step, further action will be handled by he validator
		});

		// Changed event
		_wizardObj.on('changed', function (wizard) {
			KTUtil.scrollTop();
		});

		// Submit event
		_wizardObj.on('submit', function (wizard) {
			// Validate form before submit
			var validator = _validations[wizard.getStep() - 1]; // get validator for currnt step

			if (validator) {
				validator.validate().then(function (status) {
					if (status == 'Valid') {
						_formEl.submit(); // submit form
					} else {
						Swal.fire({
							text: "Sorry, looks like there are some errors detected, please try again.",
							icon: "error",
							buttonsStyling: false,
							confirmButtonText: "Ok, got it!",
							customClass: {
								confirmButton: "btn font-weight-bold btn-light"
							}
						}).then(function () {
							KTUtil.scrollTop();
						});
					}
				});
			}
		});
	}

	var _initValidation = function () {
		// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
		// Step 1
		_validations.push(FormValidation.formValidation(
			_formEl,
			{
				fields: {
					first_name: {
						validators: {
							notEmpty: {
								message: 'First Name is required'
							}
						}
					},
					last_name: {
						validators: {
							notEmpty: {
								message: 'Last Name is required'
							}
						}
					},
					dob: {
						validators: {
							notEmpty: {
								message: 'DOB is required'
							}
						}
					},
					email: {
						validators: {
							notEmpty: {
								message: 'Email is required'
							}
						}
					},
					phone_home: {
						validators: {
							notEmpty: {
								message: 'Phone is required'
							}
						}
					},
					phone_mobile: {
						validators: {
							notEmpty: {
								message: 'Mobile is required'
							}
						}
					},
					addr: {
						validators: {
							notEmpty: {
								message: 'Address is required'
							}
						}
					},
					addr_zip: {
						validators: {
							notEmpty: {
								message: 'Zipcode is required'
							}
						}
					},
					addr_city: {
						validators: {
							notEmpty: {
								message: 'City is required'
							}
						}
					},
					addr_state: {
						validators: {
							notEmpty: {
								message: 'State is required'
							}
						}
					},
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap({
						//eleInvalidClass: '',
						eleValidClass: '',
					})
				}
			}
		));


		// Step 2
		_validations.push(FormValidation.formValidation(
			_formEl,
			{
				fields: {
					provider_id: {
						validators: {
							notEmpty: {
								message: 'Provider is required'
							}
						}
					},
					default_location: {
						validators: {
							notEmpty: {
								message: 'Location is required'
							}
						}
					},
					relationship: {
						validators: {
							notEmpty: {
								message: 'Relationship is required'
							},
						}
					},
					// width: {
					// 	validators: {
					// 		notEmpty: {
					// 			message: 'Package width is required'
					// 		},
					// 		digits: {
					// 			message: 'The value added is not valid'
					// 		}
					// 	}
					// },
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap({
						//eleInvalidClass: '',
						eleValidClass: '',
					})
				}
			}
		));

		// Step 3
		_validations.push(FormValidation.formValidation(
			_formEl,
			{
				fields: {
					p_payer_id: {
						validators: {
							notEmpty: {
								message: 'Payer name is required'
							}
						}
					},
					p_policy_number: {
						validators: {
							notEmpty: {
								message: 'Policy # is required'
							}
						}
					},
					p_policy_start: {
						validators: {
							notEmpty: {
								message: 'Policy Effective Start is required'
							}
						}
					},
					p_policy_end: {
						validators: {
							notEmpty: {
								message: 'Policy Effective End is required'
							}
						}
					},
					p_authorization: {
						validators: {
							notEmpty: {
								message: 'Authorization is required'
							}
						}
					},
					p_speciality: {
						validators: {
							notEmpty: {
								message: 'Speciality is required'
							}
						}
					},
					p_auth_status: {
						validators: {
							notEmpty: {
								message: 'Authorization Status is required'
							}
						}
					},
					p_diag1: {
						validators: {
							notEmpty: {
								message: 'Diagnosis 1 is required'
							}
						}
					},
					p_effective_start: {
						validators: {
							notEmpty: {
								message: 'Auth Effective Start is required'
							}
						}
					},
					p_effective_end: {
						validators: {
							notEmpty: {
								message: 'Auth Effective End is required'
							}
						}
					},
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap({
						//eleInvalidClass: '',
						eleValidClass: '',
					})
				}
			}
		));

		// Step 4
		_validations.push(FormValidation.formValidation(
			_formEl,
			{
				fields: {
					service_name: {
						validators: {
							notEmpty: {
								message: 'Service is required'
							}
						}
					},
					mod1: {
						validators: {
							notEmpty: {
								message: 'Modifier 1 is required'
							}
						}
					},
					service_increment: {
						validators: {
							notEmpty: {
								message: 'Service Increment is required'
							}
						}
					},
					units: {
						validators: {
							notEmpty: {
								message: 'Units is required'
							}
						}
					},
					rate: {
						validators: {
							notEmpty: {
								message: 'Rate is required'
							}
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Validate fields when clicking the Submit button
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap({
						//eleInvalidClass: '',
						eleValidClass: '',
					})
				}
			}
		));
	}

	return {
		// public functions
		init: function () {
			_wizardEl = KTUtil.getById('kt_wizard_v3');
			_formEl = KTUtil.getById('kt_form');

			_initWizard();
			_initValidation();
		}
	};
}();

jQuery(document).ready(function () {
	KTWizard3.init();
});
