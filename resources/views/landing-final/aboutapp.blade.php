<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>Fleet Taxi</title>
		<meta charset="utf-8" />

		<meta name="title" content="Fleet Taxi | Taxi For Everyone And Everyday" />
		<meta name="description" content="Taxi For Everyone And Everyday" />

		<!-- Open Graph / Facebook -->
		<meta property="og:type" content="website" />
		<meta property="og:url" content={{ url('/') }} />
		<meta property="og:title" content="Fleet Taxi | Taxi For Everyone And Everyday" />
		<meta property="og:description" content="Taxi For Everyone And Everyday" />


		<!-- Twitter -->
		<meta property="twitter:card" content="summary_large_image" />
		<meta property="twitter:url" content={{ url('/') }} />
		<link rel="shortcut icon" href="{{ asset('assets/logo.jpg') }}" />
		<meta property="twitter:title" content="Fleet Taxi | Taxi For Everyone And Everyday" />
		<meta property="twitter:description" content="Taxi For Everyone And Everyday" />

        <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

		<style>
			body {
				text-align: right;
				font-family: 'Cairo', sans-serif; /* تطبيق خط Cairo على الجسم */
			}
			.cardd {
				margin: 15px; /* زيادة المسافة بين الكاردات */
				padding: 20px;
				background-color: rgba(255, 255, 255, 0.8); /* لون خلفية مع شفافية */
				border: 1px solid #ddd;
				border-radius: 8px;
				box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
				flex: 1 0 30%; /* ضمان توزيع الكاردات بشكل مناسب */
				transition: transform 0.3s; /* إضافة تأثير الانتقال */
			}
			.cardd:hover {
				transform: scale(1.05); /* تحريك الكارد للأمام عند مرور المؤشر */
			}
			.cardd-title {
				margin-bottom: 10px;
				text-align: center; /* توسيط العنوان */
			}
			.cardd-text li {
				margin-bottom: 10px;
				color: #a1a5b7; /* لون النص */
			}


			.language-switcher {
			margin: 20px 0;
			}

			.content {
			margin: 20px auto;
			max-width: 600px;
			text-align: justify;
			}




		</style>
		<style>
			body {
		  direction: rtl;

		  text-align: right;
		  font-family: 'Cairo', sans-serif;
		  background: #f4f4f4;
		  color: #333;
		  margin: 0;
		  padding: 0;
	  }

	  .section-bg {
		  background-color: #fff;
		  padding: 60px 0;
	  }

	  .section-title {
		  text-align: center;
		  margin-bottom: 40px;
	  }

	  .section-title h2 {
		  font-size: 32px;
		  margin-bottom: 20px;
		  color: #444;
	  }

	  .section-title p {
		  font-size: 18px;
		  color: #777;
	  }

	  .card {
		  background: #fff;
		  border-radius: 15px;
		  padding: 20px;
		  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
		  text-align: center;
		  transition: all 0.3s ease-in-out;
		  position: relative;
		  overflow: hidden;
		  cursor: pointer;
	  }

	  .card::before {
		  content: '';
		  position: absolute;
		  top: -75px;
		  right: -75px;
		  width: 150px;
		  height: 150px;
		  background: #02264b;
		  border-radius: 50%;
		  z-index: 0;
		  transition: all 0.3s ease-in-out;
	  }

	  .card:hover::before {
		  top: -50px;
		  right: -50px;
		  width: 200px;
		  height: 200px;
	  }

	  .card .icon {
		  position: relative;
		  z-index: 1;
		  font-size: 40px;
		  color: #fff;
		  margin-bottom: 15px;
	  }

	  .card h4 {
		  position: relative;
		  z-index: 1;
		  font-size: 22px;
		  color: #fff;
		  margin-bottom: 15px;
	  }

	  .card p,
	  .card ul,
	  .card blockquote {
		  position: relative;
		  z-index: 1;
		  color: #555;
		  text-align: left;
	  }

	  .card h5 {
		  font-size: 18px;
		  margin: 15px 0;
		  color: #fff;
	  }


	  .card ul {
		  list-style-type: none;
		  padding: 0;
	  }

	  .card ul li {
		  font-size: 16px;
		  color: #fff;
		  margin-bottom: 10px;
		  position: relative;
		  padding-left: 20px;
	  }
	  .card h4 a {
	  color:#50cd89; /* تغيير لون النص إلى الأخضر */
	}

	  .card ul li::before {
		  content: '✓';
		  position: absolute;
		  left: 0;
		  color: #fff;
	  }

	  .card blockquote {
		  font-size: 16px;
		  color: #fff;
		  border-left: 4px solid #fff;
		  padding-left: 15px;
		  margin-top: 20px;
	  }

	  [data-aos] {
		  opacity: 0;
		  transition-property: transform, opacity;
	  }

	  [data-aos].aos-animate {
		  opacity: 1;
	  }

	  [data-aos="fade-up"] {
		  transform: translate3d(0, 50px, 0);
	  }

	  [data-aos="fade-up"].aos-animate {
		  transform: translate3d(0, 0, 0);
	  }

	  .animate-click {
		  animation: click-animate 1.5s infinite;
	  }

	  @keyframes click-animate {
		  0%, 100% {
			  transform: scale(1);
		  }
		  50% {
			  transform: scale(1.1);
		  }
	  }

	  /* Custom modal center styling */
	  .modal-dialog {
		  display: flex;
		  align-items: center;
		  justify-content: center;
		  min-height: 100vh;
	  }
	  .modal-content {
		  border-radius: 15px;
	  }
	  .modal-header .btn-close {
		  padding: .875rem .875rem;
		  margin: 0;
	  }
	  .modal-title {
		  margin-bottom: 0;
		  line-height: 1.5;
		  text-align: center;
		  color: navy; /* تلوين العنوان بلون كحلي */
	  }
	  .modal-body h5 {
		  color: rgb(23, 114, 11);
	  }
	  .left-align {
											text-align: left;
										}

	.language-switcher {
	  margin: 20px 0;
	}

	.content {
	  margin: 20px auto;
	  max-width: 600px;
	  text-align: justify;
	}

	#btn-login-ar, #btn-login-en {
		width: 150px; /* يمكنك تعديل العرض حسب الحاجة */
		text-align: center;
	}
	#applyNow-ar, #applyNow-en {
		width: 150px; /* يمكنك تعديل العرض حسب الحاجة */
		text-align: center;
		display: inline-block; /* يضمن أن الأزرار تعرض في سطر واحد إذا لزم الأمر */
	  }


	  </style>

	<style>
		/* نمط موحد للعناوين */
		#subtitle-fleet-ar, #subtitle-fleet-en,
		#subtitle-connect-ar, #subtitle-connect-en {
		  width: 100%; /* عرض كامل */
		  text-align: center; /* توسيط النص */
		}

		/* نمط موحد للروابط */
		#link-faq-ar, #link-faq-en,
		#link-join-ar, #link-join-en,
		#link-facebook-ar, #link-facebook-en,
		#link-github-ar, #link-github-en,
		#link-twitter-ar, #link-twitter-en,
		#link-dribbble-ar, #link-dribbble-en,
		#link-instagram-ar, #link-instagram-en {
		  display: inline-block; /* لضمان عدم كسر الخط */
		  width: 100%; /* عرض كامل */
		  text-align: center; /* توسيط النص */
		}
		.language-switcher .btn {
		display: flex;
		align-items: center;
		padding: 5px 10px; /* تعديل الحواف الداخلية */
		border-radius: 5px; /* تعديل الزوايا */
		font-size: 14px; /* تعديل حجم الخط */
		font-weight: bold; /* جعل النص عريض */
		color: #000; /* لون النص */
		background-color: #fff; /* خلفية بيضاء */
		border: 1px solid #ccc; /* إطار رمادي فاتح */
	  }

	  .language-switcher .btn:hover {
		background-color: #f0f0f0; /* تغيير الخلفية عند التحويم */
	  }

	  .flag-icon {
		width: 20px; /* عرض العلم */
		height: 20px; /* ارتفاع العلم */
	  }

	  .language-switcher .btn img {
		margin-right: 5px; /* مسافة بين العلم والنص */
	  }

	  .language-switcher .btn:focus {
		outline: none; /* إزالة الحدود عند التركيز */
	  }

	  .language-switcher .btn-ar {
		margin-right: 10px; /* مسافة بين الزرين */
	  }
	  </style>
	<style>
	.hero-image {
		width: 60%;
		max-width: 270px;
		transform: rotate(+18deg); /* إمالة الصورة */
	}

	.text-container {
		max-width: 100%;
	}

	@media (max-width: 768px) {
		.row {
			flex-direction: column;
			align-items: center;
		}

		.hero-image {
			width: 50%;
			max-width: none;
			transform: rotate(0deg); /* إلغاء الإمالة على الشاشات الصغيرة */
			margin-bottom: 20px; /* إضافة مساحة أسفل الصورة */
		}

		.text-container {
			text-align: center; /* مركز النص */
		}
	}


	</style>
		<style class="_styletron_hydrate_" data-hydrate="bzyevI PKJb iXGmUo ecKDfD hSgrkT beegqO gGRNfk jrSJdi hBYlTQ iLhGCZ hjQfgc erEjEB bWHXse deiNLO iCWFiC joTGNB cndfHK dEQovU hdjfHk hkjVrt btbKrJ hnQsEG jYqsIi dPgXUv kXvOCV finKYq dkkdtH gqcHgx hazmlH ofGld gMUoBL bVFrLX cpjRpJ hwkNle dWBVmg dTqljZ lbyguR eHvDxW kHKPVT kpeoJm dkqmeR jHDdnW onfdE jaByka bjyRXz eGPYQd dWBhWN ldoZWD dEcyIF euRvew cmqpDi ermCIc cTjatN kuOSTr dDHHCg fgcIns cpkQSM cYTjpz jNMsjR hPnljU jzIGNN etjCRc iNSTPj bxVGUh brccZX ggxDdj fOwPKV HXvWP iFSlDg iVmsgg jJqEtl iGpMsh eAlKuC hQxkXU ezKUIh eRKiLo kvOHZp jAtthA bPNWqZ cIwHCb fFTFHu WiLSj iYgZzq kaEaQk jbiowV iRqTzz dgZuEG lnfBga hzyMeG chMsaN iUrvYQ eleJdh ksXfTb bevOiB gGMds bCxgTW jUAbBJ kKaQHu bpZUjh mOjhT fwsLmT hmtvDr jOhJVe hvmnbR ieMCFc iXmjNW hBnhgZ dODCLc rjIkq fcsFre cprxqi PUjqm bYGJej boWMmn dQXoUy fYOFLN ekbqzf dTQwHf jTtGuf eGsoKS cjKEzX bnXDQl izTruM gzlAMi dKvrsS gBmvBw kZqCeD fmFLqj dtzAnt">
		.css-bzyevI {
			background-color: #ffffff;
			min-height: 100%;
		}

		.css-iXGmUo {
			border: none;
			clip: rect(0 0 0 0);
			height: 1px;
			width: 1px;
			margin: -1px;
			overflow: hidden;
			padding: 0;
			position: absolute;
			transform: translateY(-100%);
			-webkit-transition: transform 200ms ease-out;
			-moz-transition: transform 200ms ease-out;
			transition: transform 200ms ease-out;
		}

		.css-iXGmUo:focus {
			transform: translateY(0);
			-webkit-transition: transform 200ms ease-out;
			-moz-transition: transform 200ms ease-out;
			transition: transform 200ms ease-out;
			border: 0;
			clip: initial;
			height: 60px;
			margin: 0;
			padding: 0;
			position: relative;
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-pack: center;
			justify-content: center;
			-webkit-box-align: center;
			align-items: center;
			overflow: visible;
			width: 100%;
			z-index: 2147483647;
		}

		.css-iXGmUo:hover {
			text-decoration: underline;
		}

		.css-ecKDfD {
			display: inherit;
		}

		@media screen and (min-width: 600px) {
			.css-ecKDfD {
				display: inherit;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-ecKDfD {
				display: inherit;
			}
		}

		.css-hSgrkT {
			display: none;
		}

		.css-beegqO {
			display: inherit;
		}

		.css-gGRNfk {
			margin-top: 0;
			margin-bottom: 0;
			margin-left: 0;
			overflow: auto;
			padding-top: 0;
			padding-bottom: 0;
			padding-left: 24px;
			position: relative;
			outline: none;
			display: block;
			border-left: none;
			padding-right: 24px;
			list-style: none;
		}

		.css-jrSJdi {
			cursor: auto;
			margin-top: 0;
			margin-bottom: 0;
			margin-left: 0;
			margin-right: 0;
			overflow: auto;
			padding-top: 0;
			padding-bottom: 0;
			padding-left: 0;
			padding-right: 0;
			position: relative;
			outline: none;
		}

		.css-hBYlTQ {
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-pack: justify;
			justify-content: space-between;
			-webkit-box-align: center;
			align-items: center;
			width: 100%;
		}

		.css-iLhGCZ {
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-align: center;
			align-items: center;
			width: 100%;
			position: relative;
		}

		.css-hjQfgc {
			color: #000000;
			font-family: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 32px;
			font-weight: 700;
			line-height: 40px;
			-webkit-transition-property: backgroundSize;
			-moz-transition-property: backgroundSize;
			transition-property: backgroundSize;
			transition-duration: 500ms;
			transition-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
			text-decoration: none;
			text-underline-position: under;
			will-change: background-size;
			background-size: 0% 100%, 100% 100%;
			background-repeat: no-repeat;
			background-image: none;
			margin-top: 16px;
			margin-bottom: 16px;
			cursor: pointer;
			width: 100%;
		}

		.css-hjQfgc:hover {
			color: #4B4B4B;
			background-size: 100% 100%, 100% 100%;
		}

		.css-hjQfgc:focus {
			outline: none;
			outline-offset: 1px;
			text-decoration: none;
		}

		.css-hjQfgc:visited {
			color: #000000;
		}

		.css-hjQfgc:active {
			color: #5E5E5E;
		}

		.css-erEjEB {
			margin-top: 0;
			margin-bottom: 0;
			margin-left: 14px;
			overflow: auto;
			padding-top: 0;
			padding-bottom: 0;
			padding-left: 6px;
			position: relative;
			outline: none;
			display: none;
			border-left: none;
			list-style: none;
		}

		.css-bWHXse {
			cursor: pointer;
			margin-top: 0;
			margin-bottom: 0;
			margin-left: 0;
			margin-right: 0;
			overflow: auto;
			padding-top: 0;
			padding-bottom: 0;
			padding-left: 0;
			padding-right: 0;
			position: relative;
			outline: none;
		}

		.css-deiNLO {
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			position: absolute;
			right: 0;
			top: 50%;
			margin-top: -12px;
			-webkit-box-align: center;
			align-items: center;
		}

		.css-iCWFiC {
			color: #000000;
			font-family: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-weight: 700;
			font-size: 32px;
			line-height: 40px;
			margin-top: 16px;
			margin-bottom: 16px;
		}

		.css-joTGNB {
			color: #5E5E5E;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 14px;
			font-weight: 400;
			line-height: 20px;
			-webkit-transition-property: backgroundSize;
			-moz-transition-property: backgroundSize;
			transition-property: backgroundSize;
			transition-duration: 500ms;
			transition-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
			text-decoration: none;
			text-underline-position: under;
			will-change: background-size;
			background-size: 0% 100%, 100% 100%;
			background-repeat: no-repeat;
			background-image: none;
			margin-top: 16px;
			margin-bottom: 16px;
			width: 100%;
		}

		.css-joTGNB:hover {
			color: #4B4B4B;
			background-size: 100% 100%, 100% 100%;
		}

		.css-joTGNB:focus {
			outline: none;
			outline-offset: 1px;
			text-decoration: none;
		}

		.css-joTGNB:visited {
			color: #5E5E5E;
		}

		.css-joTGNB:active {
			color: #5E5E5E;
		}

		.css-cndfHK {
			display: none;
			padding-top: 12px;
			padding-right: 24px;
			padding-bottom: 96px;
			padding-left: 24px;
		}

		.css-dEQovU {
			display: -webkit-inline-box;
			display: -moz-inline-box;
			display: -ms-inline-flexbox;
			display: -webkit-inline-flex;
			display: inline-flex;
			-webkit-box-orient: horizontal;
			-webkit-box-direction: normal;
			flex-direction: row;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-pack: center;
			justify-content: center;
			border-left-width: 0;
			border-top-width: 0;
			border-right-width: 0;
			border-bottom-width: 0;
			border-left-style: none;
			border-top-style: none;
			border-right-style: none;
			border-bottom-style: none;
			outline: none;
			box-shadow: none;
			text-decoration: none;
			-webkit-appearance: none;
			-webkit-transition-property: background;
			-moz-transition-property: background;
			transition-property: background;
			transition-duration: 200ms;
			transition-timing-function: cubic-bezier(0, 0, 1, 1);
			cursor: pointer;
			margin-left: 0;
			margin-top: 0;
			margin-right: 0;
			margin-bottom: 0;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 14px;
			font-weight: 500;
			line-height: 16px;
			border-top-right-radius: 30px;
			border-bottom-right-radius: 30px;
			border-top-left-radius: 30px;
			border-bottom-left-radius: 30px;
			padding-top: 10px;
			padding-bottom: 10px;
			padding-left: 12px;
			padding-right: 12px;
			color: #000000;
			background-color: transparent;
			white-space: nowrap;
		}

		.css-dEQovU:disabled {
			cursor: not-allowed;
			background-color: transparent;
			color: #A6A6A6;
		}

		.css-dEQovU:hover {
			background-color: #F3F3F3;
		}

		.css-dEQovU:active {
			background-color: #E8E8E8;
		}

		.css-hdjfHk {
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			margin-right: 8px;
		}

		.css-hkjVrt {
			display: -ms-grid;
			display: grid;
			-ms-grid-column: 1;
			-ms-grid-column-span: -2;
			grid-column: 1 / -1;
			grid-column-gap: 40px;
			grid-row-gap: 12px;
			-ms-grid-columns: repeat(1, 1fr);
			grid-template-columns: repeat(1, 1fr);
			width: 100%;
			margin: 0 auto;
			padding-top: 40px;
			padding-right: 24px;
			padding-bottom: 64px;
			padding-left: 24px;
			box-sizing: border-box;
		}

		@media screen and (min-width: 320px) {
			.css-hkjVrt {
				grid-row-gap: 12px;
				-ms-grid-columns: repeat(1, 1fr);
				grid-template-columns: repeat(1, 1fr);
				width: 100%;
				padding-top: 40px;
				padding-right: 24px;
				padding-left: 24px;
			}
		}

		@media screen and (min-width: 600px) {
			.css-hkjVrt {
				grid-row-gap: 12px;
				-ms-grid-columns: repeat(1, 1fr);
				grid-template-columns: repeat(1, 1fr);
				width: 100%;
				padding-top: 40px;
				padding-right: 24px;
				padding-left: 24px;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-hkjVrt {
				grid-row-gap: 40px;
				-ms-grid-columns: repeat(4, 1fr);
				grid-template-columns: repeat(4, 1fr);
				width: 1136px;
				padding-top: 0;
				padding-right: 0;
				padding-left: 0;
			}
		}

		.css-btbKrJ {
			-ms-grid-column: 1;
			-ms-grid-column-span: -2;
			grid-column: 1 / -1;
			padding-bottom: 40px;
		}

		.css-hnQsEG {
			color: #000000;
			font-family: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-weight: 700;
			font-size: 28px;
			line-height: 36px;
		}

		@media screen and (min-width: 320px) {
			.css-hnQsEG {
				font-family: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
				font-weight: 700;
				font-size: 28px;
				line-height: 36px;
			}
		}

		@media screen and (min-width: 600px) {
			.css-hnQsEG {
				font-family: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
				font-weight: 700;
				font-size: 28px;
				line-height: 36px;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-hnQsEG {
				font-family: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
				font-weight: 700;
				font-size: 36px;
				line-height: 44px;
			}
		}

		.css-jYqsIi {
			display: -webkit-inline-box;
			display: -moz-inline-box;
			display: -ms-inline-flexbox;
			display: -webkit-inline-flex;
			display: inline-flex;
			-webkit-box-orient: horizontal;
			-webkit-box-direction: normal;
			flex-direction: row;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-pack: start;
			justify-content: start;
			border-left-width: 0;
			border-top-width: 0;
			border-right-width: 0;
			border-bottom-width: 0;
			border-left-style: none;
			border-top-style: none;
			border-right-style: none;
			border-bottom-style: none;
			outline: none;
			box-shadow: none;
			text-decoration: none;
			-webkit-appearance: none;
			-webkit-transition-property: background;
			-moz-transition-property: background;
			transition-property: background;
			transition-duration: 200ms;
			transition-timing-function: cubic-bezier(0, 0, 1, 1);
			cursor: pointer;
			margin-left: 0;
			margin-top: 0;
			margin-right: 0;
			margin-bottom: 0;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 18px;
			font-weight: 500;
			line-height: 24px;
			border-top-right-radius: 8px;
			border-bottom-right-radius: 8px;
			border-top-left-radius: 8px;
			border-bottom-left-radius: 8px;
			padding-top: 16px;
			padding-bottom: 16px;
			padding-left: 20px;
			padding-right: 20px;
			color: #FFFFFF;
			background-color: #000000;
			transform: translate3D(-20px, 0, 0);
		}

		.css-jYqsIi:disabled {
			cursor: not-allowed;
			background-color: transparent;
			color: #A6A6A6;
		}

		.css-dPgXUv {
			display: -webkit-inline-box;
			display: -moz-inline-box;
			display: -ms-inline-flexbox;
			display: -webkit-inline-flex;
			display: inline-flex;
			-webkit-box-orient: horizontal;
			-webkit-box-direction: normal;
			flex-direction: row;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-pack: start;
			justify-content: start;
			border-left-width: 0;
			border-top-width: 0;
			border-right-width: 0;
			border-bottom-width: 0;
			border-left-style: none;
			border-top-style: none;
			border-right-style: none;
			border-bottom-style: none;
			outline: none;
			box-shadow: none;
			text-decoration: none;
			-webkit-appearance: none;
			-webkit-transition-property: background;
			-moz-transition-property: background;
			transition-property: background;
			transition-duration: 200ms;
			transition-timing-function: cubic-bezier(0, 0, 1, 1);
			cursor: pointer;
			margin-left: 0;
			margin-top: 0;
			margin-right: 0;
			margin-bottom: 0;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 18px;
			font-weight: 500;
			line-height: 24px;
			border-top-right-radius: 8px;
			border-bottom-right-radius: 8px;
			border-top-left-radius: 8px;
			border-bottom-left-radius: 8px;
			padding-top: 16px;
			padding-bottom: 16px;
			padding-left: 20px;
			padding-right: 20px;
			color: #000000;
			background-color: transparent;
			transform: translate3D(-20px, 0, 0);
		}

		.css-dPgXUv:disabled {
			cursor: not-allowed;
			background-color: transparent;
			color: #A6A6A6;
		}

		.css-dPgXUv:hover {
			background-color: #F3F3F3;
		}

		.css-dPgXUv:active {
			background-color: #E8E8E8;
		}

		.css-kXvOCV {
			margin-bottom: 64px;
			width: 32px;
		}

		.css-finKYq {
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			border-bottom: 1px solid #000000;
			padding-bottom: 40px;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-pack: justify;
			justify-content: space-between;
		}

		.css-dkkdtH {
			width: 90%;
		}

		.css-gqcHgx {
			background-color: #FFFFFF;
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			position: relative;
			width: 100%;
			height: auto;
			min-height: auto;
			max-height: auto;
			margin: 0 auto;
			padding-top: 0;
			padding-bottom: 0;
		}

		@media screen and (min-width: 320px) {
			.css-gqcHgx {
				padding-top: 0;
				padding-bottom: 0;
			}
		}

		@media screen and (min-width: 600px) {
			.css-gqcHgx {
				padding-top: 0;
				padding-bottom: 0;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-gqcHgx {
				padding-top: 0;
				padding-bottom: 0;
			}
		}

		.css-hazmlH {
			background-position: center center;
			background-repeat: no-repeat;
			background-size: cover;
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			position: relative;
			width: 100%;
			height: auto;
			margin: 0 auto;
			overflow: hidden;
			z-index: 0;
		}

		.css-ofGld {
			width: 100%;
			max-width: 100%;
			margin-right: auto;
			margin-left: auto;
			padding-top: 0;
			padding-bottom: 0;
			align-self: flex-start;
		}

		@media screen and (min-width: 320px) {
			.css-ofGld {
				max-width: 100%;
				padding-top: 0;
				padding-bottom: 0;
			}
		}

		@media screen and (min-width: 600px) {
			.css-ofGld {
				max-width: 100%;
				padding-top: 0;
				padding-bottom: 0;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-ofGld {
				max-width: 1280px;
				padding-top: 0;
				padding-bottom: 0;
			}
		}

		.css-gMUoBL {
			color: #000000;
			background-color: transparent;
			padding-top: 40px;
			padding-right: 24px;
			padding-bottom: 40px;
			padding-left: 24px;
		}

		@media screen and (min-width: 320px) {
			.css-gMUoBL {
				padding-top: 40px;
				padding-right: 24px;
				padding-bottom: 40px;
				padding-left: 24px;
			}
		}

		@media screen and (min-width: 600px) {
			.css-gMUoBL {
				padding-top: 56px;
				padding-right: 32px;
				padding-bottom: 56px;
				padding-left: 32px;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-gMUoBL {
				padding-top: 64px;
				padding-right: 64px;
				padding-bottom: 64px;
				padding-left: 64px;
			}
		}

		.css-bVFrLX {
			display: -ms-grid;
			display: grid;
			grid-column-gap: 16px;
			grid-row-gap: 36px;
			-ms-grid-columns: repeat(4, 1fr);
			grid-template-columns: repeat(4, 1fr);
			height: 100%;
			justify-items: inherit;
		}

		@media screen and (min-width: 320px) {
			.css-bVFrLX {
				grid-column-gap: 16px;
				grid-row-gap: 36px;
				-ms-grid-columns: repeat(4, 1fr);
				grid-template-columns: repeat(4, 1fr);
			}
		}

		@media screen and (min-width: 600px) {
			.css-bVFrLX {
				grid-column-gap: 36px;
				grid-row-gap: 36px;
				-ms-grid-columns: repeat(8, 1fr);
				grid-template-columns: repeat(8, 1fr);
			}
		}

		@media screen and (min-width: 1136px) {
			.css-bVFrLX {
				grid-column-gap: 36px;
				grid-row-gap: 36px;
				-ms-grid-columns: repeat(12, 1fr);
				grid-template-columns: repeat(12, 1fr);
			}
		}

		.css-cpjRpJ {
			-ms-grid-column: 1;
			-ms-grid-column-span: -2;
			grid-column: 1/-1;
			order: 0;
			width: 100%;
			-ms-grid-row-align: center;
			align-self: center;
			display: -ms-grid;
			display: grid;
		}

		@media screen and (min-width: 320px) {
			.css-cpjRpJ {
				-ms-grid-column: 1;
				-ms-grid-column-span: -2;
				grid-column: 1/-1;
			}
		}

		@media screen and (min-width: 600px) {
			.css-cpjRpJ {
				-ms-grid-column: 1;
				-ms-grid-column-span: -2;
				grid-column: 1/-1;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-cpjRpJ {
				grid-column: span 5;
			}
		}

		.css-hwkNle {
			color: #000000;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: inherit;
			font-weight: 500;
			line-height: inherit;
			-webkit-transition-property: backgroundSize;
			-moz-transition-property: backgroundSize;
			transition-property: backgroundSize;
			transition-duration: 500ms;
			transition-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
			text-decoration: none;
			text-underline-position: under;
			will-change: background-size;
			background-size: 0% 100%, 100% 100%;
			background-repeat: no-repeat;
			background-image: none;
		}

		.css-hwkNle:hover {
			color: #4B4B4B;
			background-size: 100% 100%, 100% 100%;
		}

		.css-hwkNle:focus {
			outline: none;
			outline-offset: 1px;
			text-decoration: none;
		}

		.css-hwkNle:visited {
			color: #727272;
		}

		.css-hwkNle:active {
			color: #5E5E5E;
		}

		.css-dWBVmg {
			color: inherit;
			font-family: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-weight: 700;
			font-size: 36px;
			line-height: 44px;
		}

		.css-dTqljZ {
			color: #000000;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-weight: normal;
			font-size: 16px;
			line-height: 24px;
		}

		.css-lbyguR {
			-ms-grid-column: 1;
			-ms-grid-column-span: -2;
			grid-column: 1/-1;
			order: 0;
			width: 100%;
			-ms-grid-row-align: center;
			align-self: center;
			display: -ms-grid;
			display: grid;
		}

		@media screen and (min-width: 320px) {
			.css-lbyguR {
				-ms-grid-column: 1;
				-ms-grid-column-span: -2;
				grid-column: 1/-1;
			}
		}

		@media screen and (min-width: 600px) {
			.css-lbyguR {
				-ms-grid-column: 1;
				-ms-grid-column-span: -2;
				grid-column: 1/-1;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-lbyguR {
				grid-column: span 1;
			}
		}

		.css-eHvDxW {
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 16px;
			font-weight: normal;
			line-height: 24px;
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			padding-bottom: 12px;
			padding-top: 12px;
			border-bottom-width: 0;
			border-bottom-style: solid;
			border-bottom-color: #F3F3F3;
			background-color: #000000;
			position: relative;
			z-index: 2002;
			height: 64px;
			box-sizing: border-box;
			padding-left: 0;
			padding-right: 0;
			top: 0;
			transition-duration: 300ms;
			-webkit-transition-property: top;
			-moz-transition-property: top;
			transition-property: top;
		}

		.css-kHKPVT {
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			margin-left: auto;
			margin-right: auto;
			width: 100%;
			box-sizing: border-box;
			max-width: calc(1280px + 24px * 2);
			padding-left: 24px;
			padding-right: 24px;
		}

		.css-kpeoJm {
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-flex: 0;
			flex-grow: 0;
			flex-shrink: 0;
			flex-basis: auto;
			padding-left: 24px;
			padding-right: 24px;
			justify-self: flex-start;
			-webkit-box-pack: start;
			justify-content: flex-start;
			list-style: none;
			margin-bottom: 0;
			margin-top: 0;
			margin-left: 0;
			margin-right: 0;
		}

		.css-kpeoJm:first-child {
			padding: 0;
		}

		.css-kpeoJm:last-child {
			padding: 0;
		}

		.css-dkqmeR {
			-ms-grid-row-align: center;
			align-self: center;
			padding-left: 0;
			height: 100%;
			margin-bottom: 0;
		}

		.css-jHDdnW {
			color: #FFFFFF;
			font-family: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 20px;
			font-weight: 400;
			line-height: 112px;
			-webkit-transition-property: backgroundSize;
			-moz-transition-property: backgroundSize;
			transition-property: backgroundSize;
			transition-duration: 500ms;
			transition-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
			position: relative;
			text-decoration: none;
			text-underline-position: under;
			will-change: background-size;
			background-size: 0% 100%, 100% 100%;
			background-repeat: no-repeat;
			background-image: none;
			top: 0;
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			height: 100%;
			text-align: left;
			white-space: nowrap;
			-webkit-box-align: center;
			align-items: center;
		}

		.css-jHDdnW:hover {
			color: #FFFFFF;
			background-size: 100% 100%, 100% 100%;
		}

		.css-jHDdnW:focus {
			outline: none;
			outline-offset: 1px;
			text-decoration: none;
		}

		.css-jHDdnW:visited {
			color: #FFFFFF;
		}

		.css-jHDdnW:active {
			color: #FFFFFF;
		}

		@media screen and (min-width: 1136px) {
			.css-jHDdnW {
				font-size: 24px;
			}
		}

		.css-onfdE {
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-flex: 1;
			flex-grow: 1;
			flex-shrink: 1;
			flex-basis: 0%;
			padding-left: 0;
			padding-right: 0;
			-ms-grid-column-align: center;
			justify-self: center;
			-webkit-box-pack: center;
			justify-content: center;
			list-style: none;
			margin-bottom: 0;
			margin-top: 0;
			margin-left: 0;
			margin-right: 0;
			width: 0;
		}

		.css-onfdE:first-child {
			padding: 0;
		}

		.css-onfdE:last-child {
			padding: 0;
		}

		.css-jaByka {
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-flex: 0;
			flex-grow: 0;
			flex-shrink: 0;
			flex-basis: auto;
			padding-left: 24px;
			padding-right: 24px;
			justify-self: flex-end;
			-webkit-box-pack: end;
			justify-content: flex-end;
			list-style: none;
			margin-bottom: 0;
			margin-top: 0;
			margin-left: 0;
			margin-right: 0;
			transform: translateX(14px);
		}

		.css-jaByka:first-child {
			padding: 0;
		}

		.css-jaByka:last-child {
			padding: 0;
		}

		.css-bjyRXz {
			-ms-grid-row-align: center;
			align-self: center;
			padding-left: 0;
			padding-right: 4px;
			margin-bottom: 0;
		}

		.css-eGPYQd {
			display: -webkit-inline-box;
			display: -moz-inline-box;
			display: -ms-inline-flexbox;
			display: -webkit-inline-flex;
			display: inline-flex;
			-webkit-box-orient: horizontal;
			-webkit-box-direction: normal;
			flex-direction: row;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-pack: center;
			justify-content: center;
			border-left-width: 0;
			border-top-width: 0;
			border-right-width: 0;
			border-bottom-width: 0;
			border-left-style: none;
			border-top-style: none;
			border-right-style: none;
			border-bottom-style: none;
			outline: none;
			box-shadow: none;
			text-decoration: none;
			-webkit-appearance: none;
			-webkit-transition-property: background;
			-moz-transition-property: background;
			transition-property: background;
			transition-duration: 200ms;
			transition-timing-function: cubic-bezier(0, 0, 1, 1);
			cursor: pointer;
			margin-left: 0;
			margin-top: 0;
			margin-right: 0;
			margin-bottom: 0;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 14px;
			font-weight: 500;
			line-height: 16px;
			border-top-right-radius: 30px;
			border-bottom-right-radius: 30px;
			border-top-left-radius: 30px;
			border-bottom-left-radius: 30px;
			padding-top: 10px;
			padding-bottom: 10px;
			padding-left: 12px;
			padding-right: 12px;
			color: #FFFFFF;
			background-color: #000000;
			position: relative;
			overflow: hidden;
			white-space: nowrap;
		}

		.css-eGPYQd:disabled {
			cursor: not-allowed;
			background-color: #F3F3F3;
			color: #A6A6A6;
		}

		.css-eGPYQd:hover {
			background-color: #282828;
		}

		.css-eGPYQd:active {
			background-color: #4B4B4B;
		}

		.css-eGPYQd::before {
			content: "";
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			background: -webkit-linear-gradient(to bottom right, #CBCBCB, #E2E2E2 50%, #CBCBCB) no-repeat;
			background: -moz-linear-gradient(to bottom right, #CBCBCB, #E2E2E2 50%, #CBCBCB) no-repeat;
			background: linear-gradient(to bottom right, #CBCBCB, #E2E2E2 50%, #CBCBCB) no-repeat;
		}

		.css-dWBhWN {
			display: -webkit-inline-box;
			display: -moz-inline-box;
			display: -ms-inline-flexbox;
			display: -webkit-inline-flex;
			display: inline-flex;
			-webkit-box-orient: horizontal;
			-webkit-box-direction: normal;
			flex-direction: row;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-pack: center;
			justify-content: center;
			border-left-width: 0;
			border-top-width: 0;
			border-right-width: 0;
			border-bottom-width: 0;
			border-left-style: none;
			border-top-style: none;
			border-right-style: none;
			border-bottom-style: none;
			outline: none;
			box-shadow: none;
			text-decoration: none;
			-webkit-appearance: none;
			-webkit-transition-property: background;
			-moz-transition-property: background;
			transition-property: background;
			transition-duration: 200ms;
			transition-timing-function: cubic-bezier(0, 0, 1, 1);
			cursor: pointer;
			margin-left: 0;
			margin-top: 0;
			margin-right: 0;
			margin-bottom: 0;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 14px;
			font-weight: 500;
			line-height: 16px;
			border-top-right-radius: 30px;
			border-bottom-right-radius: 30px;
			border-top-left-radius: 30px;
			border-bottom-left-radius: 30px;
			padding-top: 10px;
			padding-bottom: 10px;
			padding-left: 12px;
			padding-right: 12px;
			color: #000000;
			background-color: #FFFFFF;
			white-space: nowrap;
			position: relative;
			overflow: hidden;
		}

		.css-dWBhWN:disabled {
			cursor: not-allowed;
			background-color: #F3F3F3;
			color: #A6A6A6;
		}

		.css-dWBhWN:hover {
			background-color: #E2E2E2;
			color: #000000;
		}

		.css-dWBhWN:active {
			background-color: #4B4B4B;
		}

		.css-dWBhWN:focus {
			background-color: #E2E2E2;
			color: #000000;
		}

		.css-dWBhWN::before {
			content: "";
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			background: -webkit-linear-gradient(to bottom right, #CBCBCB, #E2E2E2 50%, #CBCBCB) no-repeat;
			background: -moz-linear-gradient(to bottom right, #CBCBCB, #E2E2E2 50%, #CBCBCB) no-repeat;
			background: linear-gradient(to bottom right, #CBCBCB, #E2E2E2 50%, #CBCBCB) no-repeat;
		}

		.css-ldoZWD {
			-ms-grid-row-align: center;
			align-self: center;
			padding-left: 0;
			padding-right: 0;
			margin-bottom: 0;
		}

		.css-dEcyIF {
			display: -webkit-inline-box;
			display: -moz-inline-box;
			display: -ms-inline-flexbox;
			display: -webkit-inline-flex;
			display: inline-flex;
			-webkit-box-orient: horizontal;
			-webkit-box-direction: normal;
			flex-direction: row;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-pack: center;
			justify-content: center;
			border-left-width: 0;
			border-top-width: 0;
			border-right-width: 0;
			border-bottom-width: 0;
			border-left-style: none;
			border-top-style: none;
			border-right-style: none;
			border-bottom-style: none;
			outline: none;
			box-shadow: none;
			text-decoration: none;
			-webkit-appearance: none;
			-webkit-transition-property: background;
			-moz-transition-property: background;
			transition-property: background;
			transition-duration: 200ms;
			transition-timing-function: cubic-bezier(0, 0, 1, 1);
			cursor: pointer;
			margin-left: 0;
			margin-top: 0;
			margin-right: 0;
			margin-bottom: 0;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 14px;
			font-weight: 500;
			line-height: 16px;
			border-top-right-radius: 50%;
			border-bottom-right-radius: 50%;
			border-top-left-radius: 50%;
			border-bottom-left-radius: 50%;
			padding-top: 10px;
			padding-bottom: 10px;
			padding-left: 10px;
			padding-right: 10px;
			color: #FFFFFF;
			background-color: #000000;
		}

		.css-dEcyIF:disabled {
			cursor: not-allowed;
			background-color: #F3F3F3;
			color: #A6A6A6;
		}

		.css-dEcyIF:hover {
			background-color: #282828;
		}

		.css-dEcyIF:active {
			background-color: #4B4B4B;
		}

		.css-euRvew {
			display: block;
			position: relative;
			opacity: 0;
			-webkit-transition: opacity 100ms ease-in-out;
			-moz-transition: opacity 100ms ease-in-out;
			transition: opacity 100ms ease-in-out;
			z-index: -1;
		}

		.css-cmqpDi {
			display: block;
			position: fixed;
			top: 0;
			left: 0;
			width: 0%;
			height: 0%;
			z-index: -1;
			background-color: rgba(0, 0, 0, 0.5);
			opacity: 0;
			-webkit-transition: opacity 100ms ease-in-out;
			-moz-transition: opacity 100ms ease-in-out;
			transition: opacity 100ms ease-in-out;
		}

		.css-ermCIc {
			width: 100%;
			height: 100%;
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-pack: center;
			justify-content: center;
			cursor: default;
		}

		.css-cTjatN {
			overflow: hidden;
			width: 100%;
		}

		.css-kuOSTr {
			width: 100%;
			height: auto;
		}

		.css-dDHHCg {
			background-color: #ffffff;
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			position: relative;
			width: 100%;
			height:;
			min-height: auto;
			max-height: auto;
			margin: 0 auto;
			padding-top: 0;
			padding-bottom: 0;
		}

		@media screen and (min-width: 320px) {
			.css-dDHHCg {
				padding-top: 0;
				padding-bottom: 0;
			}
		}

		@media screen and (min-width: 600px) {
			.css-dDHHCg {
				padding-top: 0;
				padding-bottom: 0;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-dDHHCg {
				padding-top: 0;
				padding-bottom: 0;
			}
		}

		.css-fgcIns {
			color: #333333;
			background-color: transparent;
			padding-top: 40px;
			padding-right: 24px;
			padding-bottom: 0;
			padding-left: 24px;
		}

		@media screen and (min-width: 320px) {
			.css-fgcIns {
				padding-top: 40px;
				padding-right: 24px;
				padding-bottom: 0;
				padding-left: 24px;
			}
		}

		@media screen and (min-width: 600px) {
			.css-fgcIns {
				padding-top: 56px;
				padding-right: 32px;
				padding-bottom: 0;
				padding-left: 32px;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-fgcIns {
				padding-top: 64px;
				padding-right: 64px;
				padding-bottom: 0;
				padding-left: 64px;
			}
		}

		.css-cpkQSM {
			-ms-grid-column: 1;
			-ms-grid-column-span: -2;
			grid-column: 1/-1;
			order: 2;
			width: 100%;
			align-self: top;
			display: -ms-grid;
			display: grid;
		}

		@media screen and (min-width: 320px) {
			.css-cpkQSM {
				-ms-grid-column: 1;
				-ms-grid-column-span: -2;
				grid-column: 1/-1;
			}
		}

		@media screen and (min-width: 600px) {
			.css-cpkQSM {
				-ms-grid-column: 1;
				-ms-grid-column-span: -2;
				grid-column: 1/-1;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-cpkQSM {
				-ms-grid-column: 1;
				-ms-grid-column-span: 8;
				grid-column: 1 / span 8;
			}
		}

		.css-cYTjpz {
			width: 100%;
		}

		.css-jNMsjR {
			text-align: left;
		}

		@media screen and (min-width: 320px) {
			.css-jNMsjR {
				margin-bottom: 20px;
			}
		}

		@media screen and (min-width: 600px) {
			.css-jNMsjR {
				margin-bottom: 24px;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-jNMsjR {
				margin-bottom: 32px;
			}
		}

		.css-hPnljU {
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-lines: nowrap;
			flex-wrap: nowrap;
		}

		.css-jzIGNN {
			font-family: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 36px;
			font-weight: 700;
			line-height: 44px;
			-webkit-transition: all 200ms cubic-bezier(0.4, 0, 0.2, 1);
			-moz-transition: all 200ms cubic-bezier(0.4, 0, 0.2, 1);
			transition: all 200ms cubic-bezier(0.4, 0, 0.2, 1);
			color: currentColor;
			letter-spacing: 0;
			margin: 0;
			width: 100%;
		}

		@media screen and (min-width: 600px) {
			.css-jzIGNN {
				font-family: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
				font-size: 44px;
				font-weight: 700;
				line-height: 52px;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-jzIGNN {
				font-family: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
				font-size: 52px;
				font-weight: 700;
				line-height: 64px;
			}
		}

		.css-etjCRc {
			text-align: left;
		}

		@media screen and (min-width: 320px) {
			.css-etjCRc {
				margin-bottom: 0;
			}
		}

		@media screen and (min-width: 600px) {
			.css-etjCRc {
				margin-bottom: 0;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-etjCRc {
				margin-bottom: 0;
			}
		}

		.css-iNSTPj {
			color: currentColor;
			letter-spacing: 0;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 16px;
			font-weight: normal;
			line-height: 24px;
		}

		.css-iNSTPj:nth-child(n) a {
			color: currentColor;
			text-decoration: none;
			border-bottom: 1px solid currentColor;
			-webkit-transition: all 200ms ease;
			-moz-transition: all 200ms ease;
			transition: all 200ms ease;
			word-break: break-word;
			cursor: pointer;
		}

		.css-iNSTPj:nth-child(n) a:hover {
			opacity: 0.8;
		}

		.css-iNSTPj:nth-child(n) p a u {
			text-decoration: none;
		}

		.css-iNSTPj:nth-child(n) a u {
			text-decoration: none;
		}

		.css-iNSTPj:nth-child(n) strong {
			font-weight: 500;
		}

		.css-iNSTPj:nth-child(n) b {
			font-weight: 500;
		}

		.css-iNSTPj:nth-child(n) > * {
			margin-top: 15px;
			margin-bottom: 15px;
		}

		.css-iNSTPj:nth-child(n) * :first-of-type {
			margin-top: 0;
		}

		.css-iNSTPj:nth-child(n) * :last-of-type {
			margin-bottom: 0;
		}

		.css-iNSTPj:nth-child(n) img {
			max-width: 100%;
		}

		.css-iNSTPj:nth-child(n) iframe {
			max-width: 100%;
		}

		.css-iNSTPj:nth-child(n) p {
			color: currentColor;
		}

		.css-iNSTPj:nth-child(n) h1 {
			color: currentColor;
			font-family: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-weight: 700;
			font-size: 36px;
			line-height: 44px;
		}

		@media screen and (min-width: 600px) {
			.css-iNSTPj:nth-child(n) h1 {
				font-family: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
				font-size: 44px;
				font-weight: 700;
				line-height: 52px;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-iNSTPj:nth-child(n) h1 {
				font-family: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
				font-size: 52px;
				font-weight: 700;
				line-height: 64px;
			}
		}

		.css-iNSTPj:nth-child(n) h2 {
			color: currentColor;
			font-family: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-weight: 700;
			font-size: 28px;
			line-height: 36px;
		}

		@media screen and (min-width: 600px) {
			.css-iNSTPj:nth-child(n) h2 {
				font-family: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
				font-size: 32px;
				font-weight: 700;
				line-height: 40px;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-iNSTPj:nth-child(n) h2 {
				font-family: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
				font-size: 36px;
				font-weight: 700;
				line-height: 44px;
			}
		}

		.css-iNSTPj:nth-child(n) h3 {
			color: currentColor;
			font-family: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-weight: 700;
			font-size: 24px;
			line-height: 32px;
		}

		.css-iNSTPj:nth-child(n) h4 {
			color: currentColor;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-weight: 500;
			font-size: 18px;
			line-height: 24px;
		}

		.css-iNSTPj:nth-child(n) h5 {
			color: currentColor;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-weight: 500;
			font-size: 16px;
			line-height: 20px;
		}

		.css-iNSTPj:nth-child(n) h6 {
			color: currentColor;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-weight: 500;
			font-size: 14px;
			line-height: 16px;
		}

		.css-iNSTPj:nth-child(n) table {
			border-collapse: collapse;
			display: block;
			overflow-x: scroll;
		}

		@media (min-width: 1120px) {
			.css-iNSTPj:nth-child(n) table {
				width: calc(1280px - 2 * 64px);
			}
		}

		@media (min-width: 768px) and(max-width: 1119px) {
			.css-iNSTPj:nth-child(n) table {
				width: calc(100vw - 2 * 36px);
			}
		}

		@media (max-width: 767px) {
			.css-iNSTPj:nth-child(n) table {
				width: calc(100vw - 2 * 24px);
			}
		}

		.css-iNSTPj:nth-child(n) table th {
			text-align: left;
			padding: 12px;
		}

		.css-iNSTPj:nth-child(n) thead th {
			font-family: 'UberMoveText', 'Open Sans', 'Helvetica Neue', Helvetica, sans-serif;
			font-size: 16px;
			font-weight: 400;
			line-height: 24px;
			color: #545454;
			padding-bottom: 7px;
		}

		.css-iNSTPj:nth-child(n) tbody td {
			font-family: 'UberMoveText', 'Open Sans', 'Helvetica Neue', Helvetica, sans-serif;
			font-size: 16px;
			font-weight: 400;
			line-height: 24px;
			color: #545454;
			padding: 24px 16px 24px;
		}

		.css-iNSTPj:nth-child(n) tbody > tr {
			border-bottom: 1px solid #CBCBCB;
		}

		.css-iNSTPj:nth-child(n) ul {
			color: currentColor;
			list-style-type: disc;
		}

		.css-iNSTPj:nth-child(n) ul ul {
			list-style-type: circle;
		}

		.css-iNSTPj:nth-child(n) ul ul ul {
			list-style-type: square;
		}

		.css-iNSTPj:nth-child(n) ul ul ul ul {
			list-style-type: disc;
		}

		.css-iNSTPj:nth-child(n) ol {
			color: currentColor;
			list-style-type: decimal;
		}

		.css-iNSTPj:nth-child(n) ol > li::marker {
			font-weight: bold;
		}

		.css-iNSTPj:nth-child(n) ol ol {
			list-style-type: lower-latin;
		}

		.css-iNSTPj:nth-child(n) ol ol > li::marker {
			font-weight: bold;
		}

		.css-iNSTPj:nth-child(n) ol ol ol {
			list-style-type: lower-roman;
		}

		.css-iNSTPj:nth-child(n) ol ol ol > li::marker {
			font-weight: bold;
		}

		.css-iNSTPj:nth-child(n) ol ol ol ol {
			list-style-type: decimal;
		}

		.css-iNSTPj:nth-child(n) ol ol ol ol > li::marker {
			font-weight: bold;
		}

		@media (min-width: 768px) and(max-width: 1119px) {
			.css-iNSTPj {
				font-size: 16px;
				line-height: 24px;
			}
		}

		@media (max-width: 767px) {
			.css-iNSTPj {
				font-size: 16px;
				line-height: 24px;
			}
		}

		.css-bxVGUh {
			background-color: #ffffff;
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			position: relative;
			width: 100%;
			height: auto;
			min-height: auto;
			max-height: auto;
			margin: 0 auto;
			padding-top: 0;
			padding-bottom: 0;
		}

		@media screen and (min-width: 320px) {
			.css-bxVGUh {
				padding-top: 0;
				padding-bottom: 0;
			}
		}

		@media screen and (min-width: 600px) {
			.css-bxVGUh {
				padding-top: 0;
				padding-bottom: 0;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-bxVGUh {
				padding-top: 0;
				padding-bottom: 0;
			}
		}

		.css-brccZX {
			-ms-grid-column: 1;
			-ms-grid-column-span: -2;
			grid-column: 1/-1;
			order: 0;
			width: 100%;
			-ms-grid-row-align: center;
			align-self: center;
			display: -ms-grid;
			display: grid;
		}

		@media screen and (min-width: 320px) {
			.css-brccZX {
				-ms-grid-column: 1;
				-ms-grid-column-span: -2;
				grid-column: 1/-1;
			}
		}

		@media screen and (min-width: 600px) {
			.css-brccZX {
				-ms-grid-column: 1;
				-ms-grid-column-span: 7;
				grid-column: 1/span 7;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-brccZX {
				-ms-grid-column: 1;
				-ms-grid-column-span: 8;
				grid-column: 1/span 8;
			}
		}

		@media screen and (min-width: 320px) {
			.css-ggxDdj {
				margin-bottom: 0;
			}
		}

		@media screen and (min-width: 600px) {
			.css-ggxDdj {
				margin-bottom: 0;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-ggxDdj {
				margin-bottom: 0;
			}
		}

		.css-fOwPKV {
			font-family: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 28px;
			font-weight: 700;
			line-height: 36px;
			-webkit-transition: all 200ms cubic-bezier(0.4, 0, 0.2, 1);
			-moz-transition: all 200ms cubic-bezier(0.4, 0, 0.2, 1);
			transition: all 200ms cubic-bezier(0.4, 0, 0.2, 1);
			color: currentColor;
			letter-spacing: 0;
			margin: 0;
			width: 100%;
		}

		@media screen and (min-width: 600px) {
			.css-fOwPKV {
				font-family: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
				font-size: 32px;
				font-weight: 700;
				line-height: 40px;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-fOwPKV {
				font-family: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
				font-size: 36px;
				font-weight: 700;
				line-height: 44px;
			}
		}

		.css-HXvWP {
			-ms-grid-column: 1;
			-ms-grid-column-span: -2;
			grid-column: 1/-1;
			order: 0;
			width: 100%;
			-ms-grid-row-align: center;
			align-self: center;
			display: -ms-grid;
			display: grid;
		}

		.css-iFSlDg {
			display: block;
			position: relative;
		}

		.css-iFSlDg:before {
			background-color: #000000;
			content: "";
			display: block;
			height: 9px;
			position: absolute;
			transform: translateX(-4px);
			width: 9px;
		}

		.css-iFSlDg:after {
			background-color: #000000;
			bottom: 2px;
			content: "";
			position: absolute;
			top: 11px;
			-webkit-transition: height 0.5s ease-out 2s;
			-moz-transition: height 0.5s ease-out 2s;
			transition: height 0.5s ease-out 2s;
			width: 1px;
		}

		@media screen and (min-width: 320px) {
			.css-iFSlDg {
				padding-bottom: 32px;
			}

			.css-iFSlDg:before {
				left: 4px;
			}

			.css-iFSlDg:after {
				left: 4px;
			}
		}

		@media screen and (min-width: 600px) {
			.css-iFSlDg {
				padding-bottom: 40px;
			}

			.css-iFSlDg:before {
				left: calc(53% - 4px);
			}

			.css-iFSlDg:after {
				left: calc(53% - 4px);
				transform: none;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-iFSlDg {
				padding-bottom: 64px;
			}

			.css-iFSlDg:before {
				left: calc(37.5% - 4px);
			}

			.css-iFSlDg:after {
				left: calc(37.5% - 4px);
				transform: none;
			}
		}

		.css-iFSlDg:last-child {
			padding-bottom: 0;
		}

		.css-iFSlDg:last-child:after {
			display: none;
		}
		.css-iVmsgg {
    display: grid;
    grid-gap: 36px;
}

@media screen and (min-width: 320px) {
    .css-iVmsgg {
        grid-template-columns: repeat(4, 1fr);
        grid-row-gap: 20px;
    }
    .css-iVmsgg.ltr {
        direction: ltr;
    }
    .css-iVmsgg.rtl {
        direction: rtl;
    }
}

@media screen and (min-width: 600px) {
    .css-iVmsgg {
        grid-template-columns: repeat(8, 1fr);
        grid-row-gap: 50px;
    }
    .css-iVmsgg.ltr {
        direction: ltr;
    }
    .css-iVmsgg.rtl {
        direction: rtl;
    }
}

@media screen and (min-width: 1136px) {
    .css-iVmsgg {
        grid-template-columns: repeat(12, 1fr);
        grid-row-gap: 70px;
    }
    .css-iVmsgg.ltr {
        direction: ltr;
    }
    .css-iVmsgg.rtl {
        direction: rtl;
    }
}


		@media screen and (min-width: 1136px) {
			.css-iVmsgg {
				-ms-grid-columns: repeat(12, 1fr);
				grid-template-columns: repeat(12, 1fr);
				grid-row-gap: 70px;
			}
		}

		.css-jJqEtl {
			-ms-grid-column: 3;
			-ms-grid-column-span: 12;
			grid-column: 3 / span 12;
			display: block;
		}

		@media screen and (min-width: 320px) {
			.css-jJqEtl {
				-ms-grid-column: 1;
				-ms-grid-column-span: 4;
				grid-column: 1 / span 4;
				padding-left: 32px;
			}
		}

		@media screen and (min-width: 600px) {
			.css-jJqEtl {
				-ms-grid-column: 1;
				-ms-grid-column-span: 4;
				grid-column: 1 / span 4;
				padding-left: 0;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-jJqEtl {
				-ms-grid-column: 1;
				-ms-grid-column-span: 4;
				grid-column: 1 / span 4;
			}
		}

		.css-iGpMsh {
			overflow: hidden;
			padding-bottom: calc(9/16 * 100%);
			position: relative;
			width: 100%;
		}

		.css-eAlKuC {
			bottom: 0;
			left: 0;
			position: absolute;
			right: 0;
			top: 0;
		}

		.css-hQxkXU {
			margin-top: -6px;
		}

		@media screen and (min-width: 320px) {
			.css-hQxkXU {
				-ms-grid-column: 1;
				-ms-grid-column-span: 4;
				grid-column: 1 / span 4;
				padding-left: 40px;
			}
		}

		@media screen and (min-width: 600px) {
			.css-hQxkXU {
				-ms-grid-column: 5;
				-ms-grid-column-span: 4;
				grid-column: 5 / span 4;
				padding-left: 9%;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-hQxkXU {
				-ms-grid-column: 6;
				-ms-grid-column-span: 7;
				grid-column: 6 / span 7;
				padding-left: 0;
			}
		}

		.css-ezKUIh {
			color: #000000;
			margin-bottom: 12px;
			opacity: 0.5;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 14px;
			font-weight: 500;
			line-height: 16px;
		}

		@media screen and (min-width: 600px) {
			.css-ezKUIh {
				font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
				font-size: 16px;
				font-weight: 500;
				line-height: 20px;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-ezKUIh {
				font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
				font-size: 16px;
				font-weight: 500;
				line-height: 20px;
			}
		}

		@media screen and (min-width: 320px) {
			.css-eRKiLo {
				margin-bottom: 12px;
			}
		}

		@media screen and (min-width: 600px) {
			.css-eRKiLo {
				margin-bottom: 12px;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-eRKiLo {
				margin-bottom: 12px;
			}
		}

		.css-kvOHZp {
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 18px;
			font-weight: 500;
			line-height: 24px;
			-webkit-transition: all 200ms cubic-bezier(0.4, 0, 0.2, 1);
			-moz-transition: all 200ms cubic-bezier(0.4, 0, 0.2, 1);
			transition: all 200ms cubic-bezier(0.4, 0, 0.2, 1);
			color: currentColor;
			letter-spacing: 0;
			margin: 0;
			width: 100%;
		}

		.css-jAtthA {
			background-color: #f6f6f6;
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			position: relative;
			width: 100%;
			height:;
			min-height: auto;
			max-height: auto;
			margin: 0 auto;
			padding-top: 0;
			padding-bottom: 0;
		}

		@media screen and (min-width: 320px) {
			.css-jAtthA {
				padding-top: 0;
				padding-bottom: 0;
			}
		}

		@media screen and (min-width: 600px) {
			.css-jAtthA {
				padding-top: 0;
				padding-bottom: 0;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-jAtthA {
				padding-top: 0;
				padding-bottom: 0;
			}
		}

		.css-bPNWqZ {
			color: #333333;
			background-color: transparent;
			padding-top: 40px;
			padding-right: 24px;
			padding-bottom: 40px;
			padding-left: 24px;
		}

		@media screen and (min-width: 320px) {
			.css-bPNWqZ {
				padding-top: 40px;
				padding-right: 24px;
				padding-bottom: 40px;
				padding-left: 24px;
			}
		}

		@media screen and (min-width: 600px) {
			.css-bPNWqZ {
				padding-top: 56px;
				padding-right: 32px;
				padding-bottom: 56px;
				padding-left: 32px;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-bPNWqZ {
				padding-top: 64px;
				padding-right: 64px;
				padding-bottom: 64px;
				padding-left: 64px;
			}
		}

		.css-cIwHCb {
			text-align: left;
		}

		@media screen and (min-width: 320px) {
			.css-cIwHCb {
				margin-bottom: 16px;
			}
		}

		@media screen and (min-width: 600px) {
			.css-cIwHCb {
				margin-bottom: 20px;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-cIwHCb {
				margin-bottom: 24px;
			}
		}

		.css-fFTFHu {
			text-align: left;
		}

		@media screen and (min-width: 320px) {
			.css-fFTFHu {
				margin-bottom: 20px;
			}
		}

		@media screen and (min-width: 600px) {
			.css-fFTFHu {
				margin-bottom: 20px;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-fFTFHu {
				margin-bottom: 20px;
			}
		}

		.css-WiLSj {
			align-self: auto;
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-lines: multiple;
			flex-wrap: wrap;
			width: 100%;
			-webkit-box-pack: left;
			justify-content: left;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-orient: horizontal;
			-webkit-box-direction: normal;
			flex-direction: row;
		}

		.css-iYgZzq {
			margin-right: 24px;
		}

		.css-iYgZzq:last-child {
			margin-right: 0;
		}

		.css-kaEaQk {
			display: -webkit-inline-box;
			display: -moz-inline-box;
			display: -ms-inline-flexbox;
			display: -webkit-inline-flex;
			display: inline-flex;
			-webkit-box-orient: horizontal;
			-webkit-box-direction: normal;
			flex-direction: row;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-pack: center;
			justify-content: center;
			border-left-width: 0;
			border-top-width: 0;
			border-right-width: 0;
			border-bottom-width: 0;
			border-left-style: none;
			border-top-style: none;
			border-right-style: none;
			border-bottom-style: none;
			outline: none;
			box-shadow: none;
			text-decoration: none;
			-webkit-appearance: none;
			-webkit-transition-property: background;
			-moz-transition-property: background;
			transition-property: background;
			transition-duration: 200ms;
			transition-timing-function: cubic-bezier(0, 0, 1, 1);
			cursor: pointer;
			margin-left: 0;
			margin-top: 12px;
			margin-right: 0;
			margin-bottom: 0;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 16px;
			font-weight: 500;
			line-height: 20px;
			border-top-right-radius: 8px;
			border-bottom-right-radius: 8px;
			border-top-left-radius: 8px;
			border-bottom-left-radius: 8px;
			padding-top: 14px;
			padding-bottom: 14px;
			padding-left: 25px;
			padding-right: 25px;
			color: #FFFFFF;
			background-color: #000000;
		}

		.css-kaEaQk:disabled {
			cursor: not-allowed;
			background-color: #F3F3F3;
			color: #545454;
		}

		.css-kaEaQk:hover {
			background-color: #333333;
		}

		.css-kaEaQk:active {
			background-color: #545454;
		}

		.css-jbiowV {
			display: -webkit-inline-box;
			display: -moz-inline-box;
			display: -ms-inline-flexbox;
			display: -webkit-inline-flex;
			display: inline-flex;
			-webkit-box-orient: horizontal;
			-webkit-box-direction: normal;
			flex-direction: row;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-pack: center;
			justify-content: center;
			border-left-width: 0;
			border-top-width: 0;
			border-right-width: 0;
			border-bottom-width: 0;
			border-left-style: none;
			border-top-style: none;
			border-right-style: none;
			border-bottom-style: none;
			outline: none;
			box-shadow: none;
			text-decoration: none;
			-webkit-appearance: none;
			-webkit-transition-property: background;
			-moz-transition-property: background;
			transition-property: background;
			transition-duration: 200ms;
			transition-timing-function: cubic-bezier(0, 0, 1, 1);
			cursor: pointer;
			margin-left: 0;
			margin-top: 12px;
			margin-right: 0;
			margin-bottom: 0;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 16px;
			font-weight: 500;
			line-height: 20px;
			border-top-right-radius: 8px;
			border-bottom-right-radius: 8px;
			border-top-left-radius: 8px;
			border-bottom-left-radius: 8px;
			padding-top: 14px;
			padding-bottom: 14px;
			padding-left: 25px;
			padding-right: 25px;
			color: #FFFFFF;
			background-color: #333333;
		}

		.css-jbiowV:disabled {
			cursor: not-allowed;
			background-color: #F3F3F3;
			color: #6B6B6B;
		}

		.css-jbiowV:hover {
			background-color: #545454;
		}

		.css-jbiowV:active {
			background-color: #6B6B6B;
		}

		.css-iRqTzz {
			width: 100%;
			max-width: 100%;
			margin-right: auto;
			margin-left: auto;
			padding-top: 20px;
			padding-bottom: 20px;
			align-self: flex-start;
		}

		@media screen and (min-width: 320px) {
			.css-iRqTzz {
				max-width: 100%;
				padding-top: 20px;
				padding-bottom: 20px;
			}
		}

		@media screen and (min-width: 600px) {
			.css-iRqTzz {
				max-width: 100%;
				padding-top: 24px;
				padding-bottom: 24px;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-iRqTzz {
				max-width: 1280px;
				padding-top: 32px;
				padding-bottom: 32px;
			}
		}

		.css-dgZuEG {
			color: #333333;
			background-color: #f6f6f6;
			padding-top: 40px;
			padding-right: 24px;
			padding-bottom: 40px;
			padding-left: 24px;
		}

		@media screen and (min-width: 320px) {
			.css-dgZuEG {
				padding-top: 40px;
				padding-right: 24px;
				padding-bottom: 40px;
				padding-left: 24px;
			}
		}

		@media screen and (min-width: 600px) {
			.css-dgZuEG {
				padding-top: 56px;
				padding-right: 32px;
				padding-bottom: 56px;
				padding-left: 32px;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-dgZuEG {
				padding-top: 64px;
				padding-right: 64px;
				padding-bottom: 64px;
				padding-left: 64px;
			}
		}

		.css-lnfBga {
			-ms-grid-column: 1;
			-ms-grid-column-span: -2;
			grid-column: 1/-1;
			order: 2;
			width: 100%;
			-ms-grid-row-align: center;
			align-self: center;
			display: -ms-grid;
			display: grid;
		}

		@media screen and (min-width: 320px) {
			.css-lnfBga {
				-ms-grid-column: 1;
				-ms-grid-column-span: -2;
				grid-column: 1/-1;
			}
		}

		@media screen and (min-width: 600px) {
			.css-lnfBga {
				-ms-grid-column: 1;
				-ms-grid-column-span: -2;
				grid-column: 1/-1;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-lnfBga {
				-ms-grid-column: 8;
				-ms-grid-column-span: 5;
				grid-column: 8 / span 5;
			}
		}

		.css-hzyMeG {
			-ms-grid-row-align: center;
			align-self: center;
			display: -ms-grid;
			display: grid;
			-ms-grid-column: 1;
			-ms-grid-column-span: -2;
			grid-column: 1/-1;
			order: 1;
			width: 100%;
			cursor: default;
		}

		@media screen and (min-width: 320px) {
			.css-hzyMeG {
				display: -ms-grid;
				display: grid;
				-ms-grid-column: 1;
				-ms-grid-column-span: -2;
				grid-column: 1/-1;
			}
		}

		@media screen and (min-width: 600px) {
			.css-hzyMeG {
				display: -ms-grid;
				display: grid;
				-ms-grid-column: 1;
				-ms-grid-column-span: -2;
				grid-column: 1/-1;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-hzyMeG {
				display: -ms-grid;
				display: grid;
				grid-column: span 6;
			}
		}

		.css-chMsaN {
			position: relative;
		}

		.css-chMsaN::before {
			content: "";
			width: 1px;
			margin-left: -1px;
			float: left;
			height: 0;
			padding-top: 66.66666666666667%;
			pointer-events: none;
		}

		.css-chMsaN::after {
			content: "";
			display: table;
			clear: both;
		}

		.css-iUrvYQ {
			cursor: default;
		}

		.css-eleJdh {
			position: absolute;
			width: 100%;
			top: 0;
			bottom: 0;
		}

		.css-ksXfTb {
			-ms-grid-column: 1;
			-ms-grid-column-span: -2;
			grid-column: 1/-1;
			order: 0;
			width: 100%;
			-ms-grid-row-align: start;
			align-self: start;
			display: -ms-grid;
			display: grid;
		}

		@media screen and (min-width: 320px) {
			.css-ksXfTb {
				-ms-grid-column: 1;
				-ms-grid-column-span: -2;
				grid-column: 1/-1;
			}
		}

		@media screen and (min-width: 600px) {
			.css-ksXfTb {
				grid-column: span 4;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-ksXfTb {
				grid-column: span 6;
			}
		}

		.css-bevOiB {
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			flex-direction: column;
			-webkit-box-align: start;
			align-items: start;
		}

		@media screen and (min-width: 600px) {
			.css-bevOiB {
				display: -webkit-box;
				display: -moz-box;
				display: -ms-flexbox;
				display: -webkit-flex;
				display: flex;
				-webkit-box-orient: vertical;
				-webkit-box-direction: normal;
				flex-direction: column;
			}
		}

		.css-gGMds {
			height: 100%;
			padding-right: 0;
			margin-right: 0;
			margin-bottom: 20px;
			width: 100%;
		}

		@media screen and (min-width: 600px) {
			.css-gGMds {
				margin-left: 0;
				margin-right: 36px;
				margin-bottom: 20px;
			}
		}

		.css-bCxgTW {
			overflow: hidden;
			padding-bottom: calc(2/3 * 100%);
			position: relative;
			width: 100%;
		}

		@media screen and (min-width: 320px) {
			.css-jUAbBJ {
				margin-bottom: 20px;
			}
		}

		@media screen and (min-width: 600px) {
			.css-jUAbBJ {
				margin-bottom: 20px;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-jUAbBJ {
				margin-bottom: 20px;
			}
		}

		.css-kKaQHu {
			align-self: auto;
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-lines: multiple;
			flex-wrap: wrap;
			width: 100%;
			-webkit-box-pack: start;
			justify-content: flex-start;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-orient: horizontal;
			-webkit-box-direction: normal;
			flex-direction: row;
		}

		.css-bpZUjh {
			margin-top: 12px;
		}

		.css-mOjhT {
			display: inline-block;
			text-decoration: none;
			align-self: auto;
			max-width: 100%;
			border: none;
			padding: 0;
			cursor: pointer;
			background: transparent;
		}

		@media screen and (min-width: 320px) {
			.css-mOjhT {
				width: auto;
				height: auto;
			}
		}

		@media screen and (min-width: 600px) {
			.css-mOjhT {
				width: auto;
				height: auto;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-mOjhT {
				width: auto;
				height: auto;
			}
		}

		.css-fwsLmT {
			-webkit-box-align: center;
			align-items: center;
			text-decoration: none;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 16px;
			font-weight: normal;
			line-height: 32px;
		}

		.css-hmtvDr {
			color: #000000;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 16px;
			text-decoration: none;
			background-image: -webkit-linear-gradient( transparent calc(100% - 1px), #000000 1px
			), -webkit-linear-gradient( transparent calc(100% - 1px), #CBCBCB 1px
			)
			;
			background-image: -moz-linear-gradient( transparent calc(100% - 1px), #000000 1px
			), -moz-linear-gradient( transparent calc(100% - 1px), #CBCBCB 1px
			)
			;
			background-image: linear-gradient( transparent calc(100% - 1px), #000000 1px
			), linear-gradient( transparent calc(100% - 1px), #CBCBCB 1px
			)
			;
			background-size: 0% 6px, 100% 6px;
			background-position: 0 bottom, 0 bottom;
			-webkit-transition: all 500ms cubic-bezier(0.23, 1, 0.32, 1);
			-moz-transition: all 500ms cubic-bezier(0.23, 1, 0.32, 1);
			transition: all 500ms cubic-bezier(0.23, 1, 0.32, 1);
			background-repeat: no-repeat;
			padding-bottom: 6px;
			width: calc(100%);
		}

		.css-hmtvDr:hover {
			background-size: 100% 6px, 100% 6px;
		}

		.css-jOhJVe {
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-pack: center;
			justify-content: center;
			width: 100%;
		}

		.css-hvmnbR {
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			width: 100%;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-pack: start;
			justify-content: start;
			-webkit-box-flex: 1;
			flex-grow: 1;
		}

		@media screen and (min-width: 1136px) {
			.css-hvmnbR {
				-webkit-box-pack: start;
				justify-content: flex-start;
			}
		}

		.css-ieMCFc {
			min-width: 128px;
			margin: 4px;
		}

		.css-iXmjNW {
			display: none;
		}

		@media screen and (min-width: 1136px) {
			.css-iXmjNW {
				display: -ms-grid;
				display: grid;
				grid-column: span 1;
			}
		}

		.css-hBnhgZ {
			background-color: #000000;
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			position: relative;
			width: 100%;
			height: auto;
			min-height: auto;
			max-height: auto;
			margin: 0 auto;
			padding-top: 0;
			padding-bottom: 0;
		}

		@media screen and (min-width: 320px) {
			.css-hBnhgZ {
				padding-top: 0;
				padding-bottom: 0;
			}
		}

		@media screen and (min-width: 600px) {
			.css-hBnhgZ {
				padding-top: 0;
				padding-bottom: 0;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-hBnhgZ {
				padding-top: 0;
				padding-bottom: 0;
			}
		}

		.css-dODCLc {
			align-self: flex-start;
			width: 100%;
			max-width: 100%;
			padding-top: 40px;
			padding-right: 24px;
			padding-bottom: 40px;
			padding-left: 24px;
		}

		@media screen and (min-width: 320px) {
			.css-dODCLc {
				max-width: 100%;
				padding-top: 40px;
				padding-right: 24px;
				padding-bottom: 40px;
				padding-left: 24px;
			}
		}

		@media screen and (min-width: 600px) {
			.css-dODCLc {
				max-width: 100%;
				padding-top: 56px;
				padding-right: 32px;
				padding-bottom: 56px;
				padding-left: 32px;
			}
		}

		@media screen and (min-width: 1136px) {
			.css-dODCLc {
				max-width: 1152px;
				padding-top: 64px;
				padding-right: 64px;
				padding-bottom: 64px;
				padding-left: 64px;
			}
		}

		.css-rjIkq {
			grid-column: span 12;
			order: 0;
			width: 100%;
			-ms-grid-row-align: center;
			align-self: center;
			display: -ms-grid;
			display: grid;
		}

		@media screen and (min-width: 320px) {
			.css-rjIkq {
				grid-column: span 12;
			}
		}

		@media screen and (min-width: 600px) {
			.css-rjIkq {
				grid-column: span 8;
			}
		}

		.css-fcsFre {
			color: #FFFFFF;
			font-family: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 20px;
			font-weight: 400;
			line-height: 112px;
			-webkit-transition-property: backgroundSize;
			-moz-transition-property: backgroundSize;
			transition-property: backgroundSize;
			transition-duration: 500ms;
			transition-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
			position: relative;
			text-decoration: none;
			text-underline-position: under;
			will-change: background-size;
			background-size: 0% 100%, 100% 100%;
			background-repeat: no-repeat;
			background-image: none;
			top: 0;
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			height: 100%;
			text-align: left;
			white-space: nowrap;
			-webkit-box-align: center;
			align-items: center;
		}

		.css-fcsFre:hover {
			color: #FFFFFF;
			background-size: 100% 100%, 100% 100%;
		}

		.css-fcsFre:focus {
			outline: 3px solid #276EF1;
			outline-offset: 1px;
			text-decoration: none;
		}

		.css-fcsFre:visited {
			color: #FFFFFF;
		}

		.css-fcsFre:active {
			color: #FFFFFF;
		}

		@media screen and (min-width: 1136px) {
			.css-fcsFre {
				font-size: 24px;
			}
		}

		.css-cprxqi {
			color: #FFFFFF;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: inherit;
			font-weight: 400;
			line-height: 1;
			-webkit-transition-property: backgroundSize;
			-moz-transition-property: backgroundSize;
			transition-property: backgroundSize;
			transition-duration: 500ms;
			transition-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
			position: relative;
			text-decoration: none;
			text-underline-position: under;
			will-change: background-size;
			background-size: 0% 100%, 100% 100%;
			background-repeat: no-repeat;
			background-image: none;
			display: -webkit-inline-box;
			display: -moz-inline-box;
			display: -ms-inline-flexbox;
			display: -webkit-inline-flex;
			display: inline-flex;
			top: 0;
			margin-bottom: 0;
			height: 100%;
		}

		.css-cprxqi:hover {
			color: #FFFFFF;
			background-size: 100% 100%, 100% 100%;
		}

		.css-cprxqi:focus {
			outline: 3px solid #276EF1;
			outline-offset: 1px;
			text-decoration: none;
			color: #FFFFFF;
		}

		.css-cprxqi:visited {
			color: #FFFFFF;
		}

		.css-cprxqi:active {
			color: #5E5E5E;
		}

		@media screen and (min-width: 1136px) {
			.css-cprxqi {
				margin-bottom: 48px;
			}
		}

		.css-PUjqm {
			color: inherit;
			padding-bottom: 2px;
			margin-bottom: 0;
			margin-top: 0;
			position: relative;
		}

		.css-PUjqm:hover:after {
			content: '';
			position: absolute;
			width: 100%;
			bottom: 0;
			left: 0;
			right: 0;
			height: 1px;
			color: #FFFFFF;
			background: #FFFFFF;
		}

		.css-PUjqm:focus:after {
			content: '';
			position: absolute;
			width: 100%;
			bottom: 0;
			left: 0;
			right: 0;
			height: 1px;
			color: #FFFFFF;
			background: #FFFFFF;
		}

		.css-bYGJej {
			grid-column: span 12;
			height: 100%;
		}

		@media screen and (min-width: 320px) {
			.css-bYGJej {
				grid-column: span 12;
			}
		}

		@media screen and (min-width: 600px) {
			.css-bYGJej {
				grid-column: span 4;
			}
		}

		.css-boWMmn {
			grid-column: span 3;
			grid-auto-flow: row;
			width: 100%;
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			flex-direction: column;
			-webkit-box-align: start;
			align-items: flex-start;
		}

		.css-dQXoUy {
			color: #FFFFFF;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-weight: 500;
			font-size: 18px;
			line-height: 24px;
			margin-bottom: 20px;
		}

		.css-fYOFLN {
			color: #FFFFFF;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: inherit;
			font-weight: 500;
			line-height: inherit;
			-webkit-transition-property: backgroundSize;
			-moz-transition-property: backgroundSize;
			transition-property: backgroundSize;
			transition-duration: 500ms;
			transition-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
			text-decoration: none;
			text-underline-position: under;
			will-change: background-size;
			background-size: 0% 100%, 100% 100%;
			background-repeat: no-repeat;
			background-image: none;
			cursor: pointer;
			margin-top: 0;
			margin-bottom: 16px;
			padding-top: 0;
		}

		.css-fYOFLN:hover {
			color: #AFAFAF;
			background-size: 100% 100%, 100% 100%;
			text-decoration: none;
		}

		.css-fYOFLN:focus {
			outline: 3px solid #276EF1;
			outline-offset: 1px;
			text-decoration: none;
			color: #AFAFAF;
		}

		.css-fYOFLN:visited {
			color: #FFFFFF;
			text-decoration: none;
		}

		.css-fYOFLN:active {
			color: #5E5E5E;
		}

		.css-ekbqzf {
			color: inherit;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-weight: normal;
			font-size: 14px;
			line-height: 20px;
			margin-top: 0;
			margin-bottom: 0;
		}

		.css-dTQwHf {
			padding-top: 12px;
			padding-bottom: 12px;
			display: -ms-grid;
			display: grid;
			grid-auto-flow: column;
			grid-column: span 6;
			transform: translateX(-12px);
		}

		.css-jTtGuf {
			display: -ms-grid;
			display: grid;
			width: 100%;
			grid-auto-flow: row;
			-ms-grid-column: 1;
			-ms-grid-column-span: -2;
			grid-column: 1/-1;
			-webkit-box-pack: left;
			justify-content: left;
			justify-items: start;
			transform: translateX(-12px);
		}

		@media screen and (min-width: 1136px) {
			.css-jTtGuf {
				display: -webkit-box;
				display: -moz-box;
				display: -ms-flexbox;
				display: -webkit-flex;
				display: flex;
				grid-column: span 6;
				grid-auto-flow: column;
				-webkit-box-align: center;
				align-items: center;
				-webkit-box-pack: end;
				justify-content: end;
			}
		}

		.css-eGsoKS {
			display: -ms-grid;
			display: grid;
			grid-column: span 6;
			grid-auto-flow: column;
			width: 100%;
		}

		.css-cjKEzX {
			display: -webkit-inline-box;
			display: -moz-inline-box;
			display: -ms-inline-flexbox;
			display: -webkit-inline-flex;
			display: inline-flex;
			-webkit-box-orient: horizontal;
			-webkit-box-direction: normal;
			flex-direction: row;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-pack: center;
			justify-content: center;
			border-left-width: 0;
			border-top-width: 0;
			border-right-width: 0;
			border-bottom-width: 0;
			border-left-style: none;
			border-top-style: none;
			border-right-style: none;
			border-bottom-style: none;
			outline: none;
			box-shadow: none;
			text-decoration: none;
			-webkit-appearance: none;
			-webkit-transition-property: background;
			-moz-transition-property: background;
			transition-property: background;
			transition-duration: 200ms;
			transition-timing-function: cubic-bezier(0, 0, 1, 1);
			cursor: pointer;
			margin-left: 0;
			margin-top: 0;
			margin-right: 0;
			margin-bottom: 0;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 16px;
			font-weight: 500;
			line-height: 20px;
			border-top-right-radius: 8px;
			border-bottom-right-radius: 8px;
			border-top-left-radius: 8px;
			border-bottom-left-radius: 8px;
			padding-top: 0;
			padding-bottom: 0;
			padding-left: 0;
			padding-right: 0;
			color: #FFFFFF;
			background-color: #000000;
			height: 48px;
			width: 48px;
		}

		.css-cjKEzX:disabled {
			cursor: not-allowed;
			background-color: #F3F3F3;
			color: #A6A6A6;
		}

		.css-cjKEzX:hover {
			background-color: #282828;
		}

		.css-cjKEzX:active {
			background-color: #4B4B4B;
		}

		.css-bnXDQl {
			display: -webkit-inline-box;
			display: -moz-inline-box;
			display: -ms-inline-flexbox;
			display: -webkit-inline-flex;
			display: inline-flex;
			-webkit-box-orient: horizontal;
			-webkit-box-direction: normal;
			flex-direction: row;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-pack: center;
			justify-content: center;
			border-left-width: 0;
			border-top-width: 0;
			border-right-width: 0;
			border-bottom-width: 0;
			border-left-style: none;
			border-top-style: none;
			border-right-style: none;
			border-bottom-style: none;
			outline: none;
			box-shadow: none;
			text-decoration: none;
			-webkit-appearance: none;
			-webkit-transition-property: background;
			-moz-transition-property: background;
			transition-property: background;
			transition-duration: 200ms;
			transition-timing-function: cubic-bezier(0, 0, 1, 1);
			cursor: pointer;
			margin-left: 0;
			margin-top: 0;
			margin-right: 0;
			margin-bottom: 0;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 14px;
			font-weight: 500;
			line-height: 16px;
			border-top-right-radius: 8px;
			border-bottom-right-radius: 8px;
			border-top-left-radius: 8px;
			border-bottom-left-radius: 8px;
			padding-top: 10px;
			padding-bottom: 10px;
			padding-left: 12px;
			padding-right: 12px;
			color: #FFFFFF;
			background-color: #000000;
		}

		.css-bnXDQl:disabled {
			cursor: not-allowed;
			background-color: #F3F3F3;
			color: #A6A6A6;
		}

		.css-bnXDQl:hover {
			background-color: #282828;
		}

		.css-bnXDQl:active {
			background-color: #4B4B4B;
		}

		.css-izTruM {
			color: #000000;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: inherit;
			font-weight: 500;
			line-height: inherit;
			-webkit-transition-property: backgroundSize;
			-moz-transition-property: backgroundSize;
			transition-property: backgroundSize;
			transition-duration: 500ms;
			transition-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
			text-decoration: underline;
			text-underline-position: under;
			will-change: background-size;
			background-size: 0% 100%, 100% 100%;
			background-repeat: no-repeat;
			background-image: none;
		}

		.css-izTruM:hover {
			color: #4B4B4B;
			background-size: 100% 100%, 100% 100%;
		}

		.css-izTruM:focus {
			outline: none;
			outline-offset: 1px;
			text-decoration: none;
		}

		.css-izTruM:visited {
			color: #727272;
		}

		.css-izTruM:active {
			color: #5E5E5E;
		}

		.css-gzlAMi {
			grid-column: span 3;
			order: 0;
			width: 100%;
			-ms-grid-row-align: center;
			align-self: center;
			display: -ms-grid;
			display: grid;
		}

		.css-dKvrsS {
			color: #AFAFAF;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-weight: normal;
			font-size: 12px;
			line-height: 20px;
		}

		.css-gBmvBw {
			grid-column: span 5;
			order: 0;
			width: 100%;
			-ms-grid-row-align: center;
			align-self: center;
			display: -ms-grid;
			display: grid;
		}

		.css-kZqCeD {
			display: -ms-grid;
			display: grid;
			-ms-grid-column: 1;
			-ms-grid-column-span: -2;
			grid-column: 1/-1;
			grid-auto-flow: column;
		}

		@media screen and (min-width: 1136px) {
			.css-kZqCeD {
				-webkit-box-pack: end;
				justify-content: end;
				grid-gap: 32px;
			}
		}

		.css-fmFLqj {
			color: #AFAFAF;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: inherit;
			font-weight: 500;
			line-height: inherit;
			-webkit-transition-property: backgroundSize;
			-moz-transition-property: backgroundSize;
			transition-property: backgroundSize;
			transition-duration: 500ms;
			transition-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
			text-decoration: none;
			text-underline-position: under;
			will-change: background-size;
			background-size: 0% 100%, 100% 100%;
			background-repeat: no-repeat;
			background-image: none;
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			cursor: pointer;
			margin-bottom: 16px;
		}

		.css-fmFLqj:hover {
			color: #4B4B4B;
			background-size: 100% 100%, 100% 100%;
		}

		.css-fmFLqj:focus {
			outline: 3px solid #276EF1;
			outline-offset: 1px;
			text-decoration: none;
		}

		.css-fmFLqj:visited {
			color: #727272;
		}

		.css-fmFLqj:active {
			color: #5E5E5E;
		}

		.css-dtzAnt {
			color: inherit;
			font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-weight: normal;
			font-size: 12px;
			line-height: 20px;
			margin-top: 0;
			margin-bottom: 0;
		}
		</style>
		<style>
		@font-face {
			font-family: "Book";
			font-display: fallback;
			src: url("https://d3i4yxtzktqr9n.cloudfront.net/uber-sites/c7d2487e86a01259.woff2") format("woff2"), url("https://d3i4yxtzktqr9n.cloudfront.net/uber-sites/d9fefb2e7848440e.woff") format("woff");
		}

		@font-face {
			font-family: "NarrowBook";
			font-display: fallback;
			src: url("https://d3i4yxtzktqr9n.cloudfront.net/uber-sites/4092f014767a0c42.woff2") format("woff2"), url("https://d3i4yxtzktqr9n.cloudfront.net/uber-sites/72265bee6edcde38.woff") format("woff");
		}

		@font-face {
			font-family: "Medium";
			font-display: fallback;
			src: url("https://d3i4yxtzktqr9n.cloudfront.net/uber-sites/373acd359b809a36.woff2") format("woff2"), url("https://d3i4yxtzktqr9n.cloudfront.net/uber-sites/4a6ba14eeb82d398.woff") format("woff");
		}

		@font-face {
			font-family: "NarrowMedium";
			font-display: fallback;
			src: url("https://d3i4yxtzktqr9n.cloudfront.net/uber-sites/d03e099b908c23f5.woff2") format("woff2"), url("https://d3i4yxtzktqr9n.cloudfront.net/uber-sites/3b7b2d393828f966.woff") format("woff");
		}

		@font-face {
			font-family: "News";
			font-display: fallback;
			src: url("https://d3i4yxtzktqr9n.cloudfront.net/uber-sites/eaaab0415f3c894a.woff2") format("woff2"), url("https://d3i4yxtzktqr9n.cloudfront.net/uber-sites/7dee2ff8254c25e7.woff") format("woff");
		}

		@font-face {
			font-family: "NarrowNews";
			font-display: fallback;
			src: url("https://d3i4yxtzktqr9n.cloudfront.net/uber-sites/3ead8fe086dcc03b.woff2") format("woff2"), url("https://d3i4yxtzktqr9n.cloudfront.net/uber-sites/d35e4f7be34dbdf1.woff") format("woff");
		}

		@font-face {
			font-family: "Thin";
			font-display: fallback;
			src: url("https://d3i4yxtzktqr9n.cloudfront.net/uber-sites/4971a684a2006b0b.woff2") format("woff2"), url("https://d3i4yxtzktqr9n.cloudfront.net/uber-sites/3bafb784fdbf1412.woff") format("woff");
		}

		@font-face {
			font-family: "NarrowThin";
			font-display: fallback;
			src: url("https://d3i4yxtzktqr9n.cloudfront.net/uber-sites/22ff2ed7e89a1893.woff2") format("woff2"), url("https://d3i4yxtzktqr9n.cloudfront.net/uber-sites/56bde4d6d985fd33.woff") format("woff");
		}
		</style>

		<style data-rh="true">
		html, body, #root {
			min-height: 100%;
		}

		html {
			font-family: sans-serif;
			-ms-text-size-adjust: 100%;
			-webkit-text-size-adjust: 100%;
			-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
		}

		body {
			margin: 0;
		}

		button::-moz-focus-inner, input::-moz-focus-inner {
			border: 0;
			padding: 0;
		}

		input::-webkit-inner-spin-button, input::-webkit-outer-spin-button, input::-webkit-search-cancel-button, input::-webkit-search-decoration, input::-webkit-search-results-button, input::-webkit-search-results-decoration {
			display: none;
		}
		</style>
		<style data-rh="true">
		@font-face {
			font-family: 'UberMove';
			src: url('https://d1a3f4spazzrp4.cloudfront.net/dotcom-assets/fonts/UberMove-Light.woff2')
			format('woff2'), url('https://d1a3f4spazzrp4.cloudfront.net/dotcom-assets/fonts/UberMove-Light.woff')
			format('woff');
			font-weight: 200;
			font-style: normal;
			font-display: swap;
		}

		@font-face {
			font-family: 'UberMove';
			src: url('https://d1a3f4spazzrp4.cloudfront.net/dotcom-assets/fonts/UberMove-Regular.woff2')
			format('woff2'), url('https://d1a3f4spazzrp4.cloudfront.net/dotcom-assets/fonts/UberMove-Regular.woff')
			format('woff');
			font-weight: 400;
			font-style: normal;
			font-display: swap;
		}

		@font-face {
			font-family: 'UberMove';
			src: url('https://d1a3f4spazzrp4.cloudfront.net/dotcom-assets/fonts/UberMove-Medium.woff2')
			format('woff2'), url('https://d1a3f4spazzrp4.cloudfront.net/dotcom-assets/fonts/UberMove-Medium.woff')
			format('woff');
			font-weight: 500;
			font-style: normal;
			font-display: swap;
		}

		@font-face {
			font-family: 'UberMove';
			src: url('https://d1a3f4spazzrp4.cloudfront.net/dotcom-assets/fonts/UberMove-Bold.woff2')
			format('woff2'), url('https://d1a3f4spazzrp4.cloudfront.net/dotcom-assets/fonts/UberMove-Bold.woff')
			format('woff');
			font-weight: 600;
			font-style: normal;
			font-display: swap;
		}

		@font-face {
			font-family: 'UberMoveText';
			src: url('https://d1a3f4spazzrp4.cloudfront.net/dotcom-assets/fonts/UberMoveText-Light.woff2')
			format('woff2'), url('https://d1a3f4spazzrp4.cloudfront.net/dotcom-assets/fonts/UberMoveText-Light.woff')
			format('woff');
			font-weight: 200;
			font-style: normal;
			font-display: swap;
		}

		@font-face {
			font-family: 'UberMoveText';
			src: url('https://d1a3f4spazzrp4.cloudfront.net/dotcom-assets/fonts/UberMoveText-Regular.woff2')
			format('woff2'), url('https://d1a3f4spazzrp4.cloudfront.net/dotcom-assets/fonts/UberMoveText-Regular.woff')
			format('woff');
			font-weight: 400;
			font-style: normal;
			font-display: swap;
		}

		@font-face {
			font-family: 'UberMoveText';
			src: url('https://d1a3f4spazzrp4.cloudfront.net/dotcom-assets/fonts/UberMoveText-Medium.woff2')
			format('woff2'), url('https://d1a3f4spazzrp4.cloudfront.net/dotcom-assets/fonts/UberMoveText-Medium.woff')
			format('woff');
			font-weight: 500;
			font-style: normal;
			font-display: swap;
		}

		@font-face {
			font-family: 'UberMoveText';
			src: url('https://d1a3f4spazzrp4.cloudfront.net/dotcom-assets/fonts/UberMoveText-Bold.woff2')
			format('woff2'), url('https://d1a3f4spazzrp4.cloudfront.net/dotcom-assets/fonts/UberMoveText-Bold.woff')
			format('woff');
			font-weight: 600;
			font-style: normal;
			font-display: swap;
		}
		</style>

		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/logo.jpg" />
		<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
		<!--begin::Fonts-->
		<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" /> -->
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	</head>
	<!--end::Head-->
	<style>
		body {
			text-align: right;
			font-family: 'Cairo', sans-serif; /* تطبيق خط Cairo على الجسم */
		}
		.cardd {
			margin: 15px; /* زيادة المسافة بين الكاردات */
			padding: 20px;
			background-color: rgba(255, 255, 255, 0.8); /* لون خلفية مع شفافية */
			border: 1px solid #ddd;
			border-radius: 8px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			flex: 1 0 30%; /* ضمان توزيع الكاردات بشكل مناسب */
			transition: transform 0.3s; /* إضافة تأثير الانتقال */
		}
		.cardd:hover {
			transform: scale(1.05); /* تحريك الكارد للأمام عند مرور المؤشر */
		}
		.cardd-title {
			margin-bottom: 10px;
			text-align: center; /* توسيط العنوان */
		}
		.cardd-text li {
			margin-bottom: 10px;
			color: #a1a5b7; /* لون النص */
		}


		.language-switcher {
		margin: 20px 0;
		}

		.content {
		margin: 20px auto;
		max-width: 600px;
		text-align: justify;
		}




	</style>
	<style>
		body {
	  direction: rtl;

	  text-align: right;
	  font-family: 'Cairo', sans-serif;
	  background: #f4f4f4;
	  color: #333;
	  margin: 0;
	  padding: 0;
  }

  .section-bg {
	  background-color: #fff;
	  padding: 60px 0;
  }

  .section-title {
	  text-align: center;
	  margin-bottom: 40px;
  }

  .section-title h2 {
	  font-size: 32px;
	  margin-bottom: 20px;
	  color: #444;
  }

  .section-title p {
	  font-size: 18px;
	  color: #777;
  }

  .card {
	  background: #fff;
	  border-radius: 15px;
	  padding: 20px;
	  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
	  text-align: center;
	  transition: all 0.3s ease-in-out;
	  position: relative;
	  overflow: hidden;
	  cursor: pointer;
  }

  .card::before {
	  content: '';
	  position: absolute;
	  top: -75px;
	  right: -75px;
	  width: 150px;
	  height: 150px;
	  background: #02264b;
	  border-radius: 50%;
	  z-index: 0;
	  transition: all 0.3s ease-in-out;
  }

  .card:hover::before {
	  top: -50px;
	  right: -50px;
	  width: 200px;
	  height: 200px;
  }

  .card .icon {
	  position: relative;
	  z-index: 1;
	  font-size: 40px;
	  color: #fff;
	  margin-bottom: 15px;
  }

  .card h4 {
	  position: relative;
	  z-index: 1;
	  font-size: 22px;
	  color: #fff;
	  margin-bottom: 15px;
  }

  .card p,
  .card ul,
  .card blockquote {
	  position: relative;
	  z-index: 1;
	  color: #555;
	  text-align: left;
  }

  .card h5 {
	  font-size: 18px;
	  margin: 15px 0;
	  color: #fff;
  }


  .card ul {
	  list-style-type: none;
	  padding: 0;
  }

  .card ul li {
	  font-size: 16px;
	  color: #fff;
	  margin-bottom: 10px;
	  position: relative;
	  padding-left: 20px;
  }
  .card h4 a {
  color:#50cd89; /* تغيير لون النص إلى الأخضر */
}

  .card ul li::before {
	  content: '✓';
	  position: absolute;
	  left: 0;
	  color: #fff;
  }

  .card blockquote {
	  font-size: 16px;
	  color: #fff;
	  border-left: 4px solid #fff;
	  padding-left: 15px;
	  margin-top: 20px;
  }

  [data-aos] {
	  opacity: 0;
	  transition-property: transform, opacity;
  }

  [data-aos].aos-animate {
	  opacity: 1;
  }

  [data-aos="fade-up"] {
	  transform: translate3d(0, 50px, 0);
  }

  [data-aos="fade-up"].aos-animate {
	  transform: translate3d(0, 0, 0);
  }

  .animate-click {
	  animation: click-animate 1.5s infinite;
  }

  @keyframes click-animate {
	  0%, 100% {
		  transform: scale(1);
	  }
	  50% {
		  transform: scale(1.1);
	  }
  }

  /* Custom modal center styling */
  .modal-dialog {
	  display: flex;
	  align-items: center;
	  justify-content: center;
	  min-height: 100vh;
  }
  .modal-content {
	  border-radius: 15px;
  }
  .modal-header .btn-close {
	  padding: .875rem .875rem;
	  margin: 0;
  }
  .modal-title {
	  margin-bottom: 0;
	  line-height: 1.5;
	  text-align: center;
	  color: navy; /* تلوين العنوان بلون كحلي */
  }
  .modal-body h5 {
	  color: rgb(23, 114, 11);
  }
  .left-align {
										text-align: left;
									}

.language-switcher {
  margin: 20px 0;
}

.content {
  margin: 20px auto;
  max-width: 600px;
  text-align: justify;
}

#btn-login-ar, #btn-login-en {
    width: 150px; /* يمكنك تعديل العرض حسب الحاجة */
    text-align: center;
}
#applyNow-ar, #applyNow-en {
    width: 150px; /* يمكنك تعديل العرض حسب الحاجة */
    text-align: center;
    display: inline-block; /* يضمن أن الأزرار تعرض في سطر واحد إذا لزم الأمر */
  }


  </style>

<style>
	/* نمط موحد للعناوين */
	#subtitle-fleet-ar, #subtitle-fleet-en,
	#subtitle-connect-ar, #subtitle-connect-en {
	  width: 100%; /* عرض كامل */
	  text-align: center; /* توسيط النص */
	}

	/* نمط موحد للروابط */
	#link-faq-ar, #link-faq-en,
	#link-join-ar, #link-join-en,
	#link-facebook-ar, #link-facebook-en,
	#link-github-ar, #link-github-en,
	#link-twitter-ar, #link-twitter-en,
	#link-dribbble-ar, #link-dribbble-en,
	#link-instagram-ar, #link-instagram-en {
	  display: inline-block; /* لضمان عدم كسر الخط */
	  width: 100%; /* عرض كامل */
	  text-align: center; /* توسيط النص */
	}
	.language-switcher .btn {
    display: flex;
    align-items: center;
    padding: 5px 10px; /* تعديل الحواف الداخلية */
    border-radius: 5px; /* تعديل الزوايا */
    font-size: 14px; /* تعديل حجم الخط */
    font-weight: bold; /* جعل النص عريض */
    color: #000; /* لون النص */
    background-color: #fff; /* خلفية بيضاء */
    border: 1px solid #ccc; /* إطار رمادي فاتح */
  }

  .language-switcher .btn:hover {
    background-color: #f0f0f0; /* تغيير الخلفية عند التحويم */
  }

  .flag-icon {
    width: 20px; /* عرض العلم */
    height: 20px; /* ارتفاع العلم */
  }

  .language-switcher .btn img {
    margin-right: 5px; /* مسافة بين العلم والنص */
  }

  .language-switcher .btn:focus {
    outline: none; /* إزالة الحدود عند التركيز */
  }

  .language-switcher .btn-ar {
    margin-right: 10px; /* مسافة بين الزرين */
  }
  </style>
<style>
.hero-image {
    width: 60%;
    max-width: 270px;
    transform: rotate(+18deg); /* إمالة الصورة */
}

.text-container {
    max-width: 100%;
}

@media (max-width: 768px) {
    .row {
        flex-direction: column;
        align-items: center;
    }

    .hero-image {
        width: 50%;
        max-width: none;
        transform: rotate(0deg); /* إلغاء الإمالة على الشاشات الصغيرة */
        margin-bottom: 20px; /* إضافة مساحة أسفل الصورة */
    }

    .text-container {
        text-align: center; /* مركز النص */
    }
}


</style>

	<!--begin::Body-->
	<body id="kt_body"  data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="bg-white position-relative">

		<!--begin::Main-->
		<div class="mb-0" id="home">
			<!--begin::Wrapper-->
			<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(assets/media/svg/illustrations/landing.svg)">
				<!--begin::Header-->
				<!-- <div class="beyoglu-istanbul-tr bgi-size-contain bgi-position-y-bottom landing-dark-bg" style="background-image: url(assets/Black\ and\ White\ Phone\ Mockup\ Webinar\ Promotion\ Instagram\ Story.png)"> -->
				<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Wrapper-->
						<div class="d-flex align-items-center justify-content-between">
							<!--begin::Logo-->
							<div class="d-flex align-items-center flex-equal">
								<!--begin::Mobile menu toggle-->
								<button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-2hx">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--end::Mobile menu toggle-->
								<!--begin::Logo image-->
								<a href={{ route('welcome') }}>
									<img alt="Logo" src="{{ asset('assets/logo.jpg') }}" class="logo-default h-50px h-lg-60px" />
									<img alt="Logo" src="{{ asset('assets/logo.jpg') }}" class="logo-sticky h-40px h-lg-50px" />

								</a>
								<!--end::Logo image-->
							</div>
							<!--end::Logo-->
							<!--begin::Menu wrapper-->
							<div class="d-lg-block" id="kt_header_nav_wrapper">
								<div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
									<!--begin::Menu-->
									<div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold" id="kt_landing_menu">
										<!--begin::Menu item-->
										<div class="menu-item py-3 px-4 px-xxl-6">
											<div class="dropdown  ">
												<button class="btn no-background dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
												  <div class=" menu-link nav-link content_ar">
													<img class="w-15px h-15px rounded-1 ms-2" src="{{ asset('assets/media/flags/syria.svg') }}" alt="Arabic">
													عربي
												  </div>
												  <div class=" menu-link nav-link content_en" style="display: none;">
													<img class="w-15px h-15px rounded-1 ms-2" src="{{ asset('assets/media/flags/united-states.svg') }}" alt="English">
													English
												  </div>
												</button>
												<ul class="dropdown-menu" aria-labelledby="languageDropdown">
												  <li>
													<a class="dropdown-item" href="#" onclick="changeLanguage('ar')">
													  <img class="w-15px h-15px rounded-1 ms-2" src="{{ asset('assets/media/flags/syria.svg') }}" alt="Arabic">
													  عربي
													</a>
												  </li>
												  <li>
													<a class="dropdown-item" href="#" onclick="changeLanguage('en')">
													  <img class="w-15px h-15px rounded-1 ms-2" src="{{ asset('assets/media/flags/united-states.svg') }}" alt="English">
													  English
													</a>
												  </li>
												</ul>
											  </div>
										</div>




											<style>
												.no-background {
													background: none !important;
													border: none !important;
													box-shadow: none !important;
													padding: 0 !important;
													color: white !important; /* لون النص أبيض */
												}

												.dropdown-toggle::after {
													display: none;
												}



												.language-switcher .btn {
													display: flex;
													align-items: center;
													gap: 10px;
													color: white; /* لون النص داخل الزر أبيض */
												}

												.language-switcher .btn img {
													width: 20px;
													height: 20px;
												}

												.language-switcher .dropdown-menu .dropdown-item {
													display: flex;
													align-items: center;
													gap: 10px;

												}

												.language-switcher .dropdown-menu .dropdown-item img {
													width: 20px;
													height: 20px;
												}
												.language-switcher {

													margin-left: auto; /* للتأكد من محاذاة العنصر إلى اليمين */
												}
												.language-text {
													color: white; /* لون النص داخل الزر */
												}


											</style>

										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item">
											<!--begin::Menu link-->
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_ar" href="{{ route('welcome') }}#home" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">الرئيسية</a>
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_en" href="{{ route('welcome') }}#home" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" style="display: none;">Home</a>
											<!--end::Menu link-->
										</div>
										<div class="menu-item">
													<div class="dropdown">
														<button class="btn no-background dropdown-toggle" type="button" id="menuDropdown" data-bs-toggle="dropdown" aria-expanded="false">

															<div class=" menu-item content_ar ">
																<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_ar"data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">حول</a>
															</div>

															<div class=" menu-item content_en" style="display: none;">
																<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_en" style="display: none;" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">About</a>

															</div>
														</button>
														<ul class="dropdown-menu" aria-labelledby="menuDropdown">
															<li>
																<a class="dropdown-item" href="{{ route('welcome') }}#howus">
																	<div class="content_ar">
																		من نحن
																	</div>
																	<div class="content_en" style="display: none;">
																		Who we are
																	</div>
																</a>
															</li>
															<li>
																<a class="dropdown-item" href="{{ route('welcome') }}#how-it-works">
																	<div class="content_ar">
																		عن التطبيق
																	</div>
																	<div class="content_en" style="display: none;">
																		About the application
																	</div>
																</a>
															</li>
														</ul>
													</div>
										</div>
										<style>
											.no-background {
												background: none !important;
												border: none !important;
												box-shadow: none !important;
												padding: 0 !important;
												color: white !important;
											}

											.dropdown-toggle::after {
												display: none;
											}



											.language-switcher {
												margin-top: 0;
											}

											.language-switcher .btn, .dropdown .btn {
												display: flex;
												align-items: center;
												gap: 10px;
												color: white;
											}

											.language-switcher .btn img, .dropdown .btn img {
												width: 20px;
												height: 20px;
											}

											.language-switcher .dropdown-menu .dropdown-item, .dropdown .dropdown-menu .dropdown-item .content_ar  {
												display: flex;
												align-items: center;
												gap: 10px;
												direction: rtl !important; /* إضافة هذا السطر لمحاذاة النصوص من اليمين */
											}



											.language-switcher .dropdown-menu .dropdown-item img, .dropdown .dropdown-menu .dropdown-item img {
												width: 20px;
												height: 20px;
											}

											.language-switcher {
												position: relative;
												right: 20px;
												top: 0;
												margin-left: auto;
											}

											.language-text {
												color: white;
											}
											</style>
										<div class="menu-item">
											<!--begin::Menu link-->
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_ar" href="{{ route('welcome') }}#service" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">خدماتنا</a>
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_en" href="{{ route('welcome') }}#service" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" style="display: none;">Our services</a>
											<!--end::Menu link-->
										</div>
										<div class="menu-item">
											<!--begin::Menu link-->
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_ar" href="#" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true"> كيفية عمل التتطبيق</a>
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_en"  href="#" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" style="display: none;">How it work</a>
											<!--end::Menu link-->
										</div>

										<!--end::Menu item-->
										<!--begin::Menu item-->

										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item">
											<!--begin::Menu link-->
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_ar" href="{{ route('welcome') }}#workus" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">انضم الينا</a>
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_en" href="{{ route('welcome') }}#workus" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" style="display: none;">Join Us</a>
											<!--end::Menu link-->
										</div>
										<div class="menu-item">
											<!--begin::Menu link-->
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_ar" href="{{ route('welcome') }}#contant" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">تواصل</a>
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_en"  href="{{ route('welcome') }}#contant" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" style="display: none;">Contact</a>
											<!--end::Menu link-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->

										<div class="menu-item">
											<!--begin::Menu link-->
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_ar" href="{{ route('safety') }}" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">معايير السلامة</a>
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_en" href="{{ route('safety') }}" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" style="display: none;">Safety</a>
											<!--end::Menu link-->
										</div>


										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</div>
							</div>
							<!--end::Menu wrapper-->
							<!--begin::Toolbar-->
							<div class="flex-equal text-end ms-1">
								<a id="btn-login-ar" href=" {{route('login')}} " class="btn btn-success content_ar">تسجيل دخول</a>
								<a id="btn-login-en" href=" {{route('login')}} " class="btn btn-success content_en" style="display: none;">Sign In</a>
							</div>

							<!--end::Toolbar-->

							<!--end::Toolbar-->
						</div>
						<!--end::Wrapper-->
					<!-- </div> -->
					<!--end::Container-->
				</div>
				</div>
				<!--end::Header-->
				<!--begin::Landing hero-->

				<!--end::Landing hero-->
			</div>
			<!--end::Wrapper-->
			<!--begin::Curve bottom-->

			<!--end::Curve bottom-->
		</div>
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
						<!--  -->
						<div data-block-content-id="ac292090-0941-49b1-8e61-350e9e93160e" tabindex="-1">
							<div class="css-ecKDfD">
								<div data-baseweb="block" class="css-PKJb">
									<section data-baseweb="block" id="" class="css-dDHHCg">
										<div data-baseweb="block" class="css-hazmlH">
											<div data-baseweb="block" class="css-ofGld">
												<div data-baseweb="block" class="container-inner css-fgcIns">
													<div data-baseweb="block" class="css-bVFrLX">
														<div data-baseweb="block" class="css-cpkQSM">
															<div class="css-cYTjpz">
																<div data-baseweb="block" class="css-PKJb">
																	<div class="css-jNMsjR">
																		<div class="css-hPnljU">
																			<h1 class="css-jzIGNN content_ar">كيفية استخدام تطبيق فليبيت</h1>
																			<h1 class="css-jzIGNN content_en" style="display: none;">How to use the Fleet app</h1>
																		</div>
																	</div>
																</div>
																<div data-baseweb="block" class="css-PKJb">
																	<div class="css-etjCRc">
																		<div data-testid="markdown-wrapper" class="css-iNSTPj">
																			<p class="cmln__paragraph content_ar">خدمتنا الأساسية هي تطوير تقنية تربط السائقين والركاب عند الطلب. إليك كيفية عمل التطبيق خطوة بخطوة:</p>
																			<p class="cmln__paragraph content_en" style="display: none;">Our core service is developing technology that connects drivers and riders on demand. Here’s how the app works, step by step:</p>
																		</div>
																	</div>
																</div>
																<div data-baseweb="block" class="css-PKJb"></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>

						<div class="css-ecKDfD">
							<section data-baseweb="block" id="" class="css-bxVGUh">
								<div data-baseweb="block" class="css-hazmlH">
									<div data-baseweb="block" class="css-ofGld">
										<div data-baseweb="block" class="container-inner css-gMUoBL">
											<div data-baseweb="block" class="css-bVFrLX">
												<div data-baseweb="block" class="css-brccZX">
													<div class="css-cYTjpz">
														<div data-baseweb="block" class="css-PKJb">
															<div class="css-ggxDdj">
																<div class="css-hPnljU">
																	<h2 class="css-fOwPKV"></h2>
																</div>
															</div>
														</div>
														<div data-baseweb="block" class="css-PKJb"></div>
													</div>
												</div>
												<div data-baseweb="block" class="css-HXvWP">
													<div class="css-iFSlDg">
														<div data-baseweb="block" class="css-iVmsgg css-HXvWP ltr">
															<div class="css-jJqEtl">
																<div class="css-iGpMsh">
																	<div class="css-eAlKuC">
																		<img src="{{ asset('assets/desk2.jpeg') }}" style="height:100%;width:100%" />

																	</div>
																</div>
															</div>
															<div class="css-hQxkXU">
																<div class="css-cYTjpz">
																	<div data-baseweb="block" class="css-PKJb">
																		<div class="css-ezKUIh content_ar">الخطوة 1</div>
																		<div class="css-ezKUIh content_en" style="display: none;">Step 1</div>
																		<div class="css-eRKiLo">
																			<div class="css-hPnljU">
																				<h3 class="css-kvOHZp content_ar">يقوم الراكب بفتح التطبيق</h3>
																				<h3 class="css-kvOHZp content_en" style="display: none;">A rider opens the app</h3>
																			</div>
																		</div>
																	</div>
																	<div data-baseweb="block" class="css-PKJb">
																		<div class="css-ggxDdj">
																			<div data-testid="markdown-wrapper" class="css-iNSTPj">
																				<p class="cmln__paragraph content_ar">يقوم الراكب بإدخال وجهته في مربع "إلى أين؟"؛ يراجع كل خيار من خيارات الركوب من حيث حجم المركبة والسعر والوقت المقدر للوصول؛ يختار الخيار المطلوب؛ ثم يؤكد نقطة الالتقاط.</p>
																				<p class="cmln__paragraph content_en" style="display: none;">The rider enters their destination into the “Where to?” box; reviews each ride option for vehicle size, price, and estimated dropoff time; chooses the desired option; then confirms the pickup.</p>
																			</div>
																		</div>
																	</div>
																	<div data-baseweb="block" class="css-PKJb"></div>
																</div>
															</div>

														</div>
													</div>
													<div class="css-iFSlDg">
														<div data-baseweb="block" class="css-iVmsgg css-HXvWP ltr">
															<div class="css-jJqEtl">
																<div class="css-iGpMsh">
																	<div class="css-eAlKuC">
																		<img src="{{ asset('assets/desk2.jpeg') }}" style="height:100%;width:100%" />
																	</div>
																</div>
															</div>
															<div class="css-hQxkXU">
																<div class="css-cYTjpz">
																	<div data-baseweb="block" class="css-PKJb">
																		<div class="css-ezKUIh content_ar">الخطوة 2</div>
																		<div class="css-ezKUIh content_en" style="display: none;">Step 2</div>
																		<div class="css-eRKiLo">
																			<div class="css-hPnljU">
																				<h3 class="css-kvOHZp content_ar">يتم مطابقة الراكب مع السائق</h3>
																				<h3 class="css-kvOHZp content_en" style="display: none;">The rider is matched with a driver</h3>
																			</div>
																		</div>
																	</div>
																	<div data-baseweb="block" class="css-PKJb">
																		<div class="css-ggxDdj">
																			<div data-testid="markdown-wrapper" class="css-iNSTPj">
																				<p class="cmln__paragraph content_ar">يرى السائق القريب طلب الركوب ويختار قبوله. يتم إبلاغ الراكب تلقائيًا عندما تكون مركبة السائق على بعد دقيقة واحدة تقريبًا.</p>
																				<p class="cmln__paragraph content_en" style="display: none;">A nearby driver sees and chooses to accept the rider’s ride request. The rider is automatically notified when the driver’s vehicle is about a minute away.</p>
																			</div>
																		</div>
																	</div>
																	<div data-baseweb="block" class="css-PKJb"></div>
																</div>
															</div>

														</div>
													</div>
													<div class="css-iFSlDg">
														<div data-baseweb="block" class="css-iVmsgg css-HXvWP ltr">
															<div class="css-jJqEtl">
																<div class="css-iGpMsh">
																	<div class="css-eAlKuC">
																		<img src="assets/desk3.jpeg" style="height:100%;width:100%" />																	</div>
																</div>
															</div>
															<div class="css-hQxkXU">
																<div class="css-cYTjpz">
																	<div data-baseweb="block" class="css-PKJb">
																		<div class="css-ezKUIh content_ar">الخطوة 3</div>
																		<div class="css-ezKUIh content_en" style="display: none;">Step 3</div>
																		<div class="css-eRKiLo">
																			<div class="css-hPnljU">
																				<h3 class="css-kvOHZp content_ar">يقوم السائق بالتقاط الراكب</h3>
																				<h3 class="css-kvOHZp content_en" style="display: none;">The driver picks up the rider</h3>
																			</div>
																		</div>
																	</div>
																	<div data-baseweb="block" class="css-PKJb">
																		<div class="css-ggxDdj">
																			<div data-testid="markdown-wrapper" class="css-iNSTPj">
																				<p class="cmln__paragraph content_ar">يتحقق السائق والراكب من أسماء بعضهما البعض ومن الوجهة. ثم يبدأ السائق الرحلة.</p>
																				<p class="cmln__paragraph content_en" style="display: none;">The driver and the rider verify each other’s names and the destination. Then the driver starts the ride.</p>
																			</div>
																		</div>
																	</div>
																	<div data-baseweb="block" class="css-PKJb"></div>
																</div>
															</div>

														</div>
													</div>
													<div class="css-iFSlDg">
														<div data-baseweb="block" class="css-iVmsgg css-HXvWP ltr">
															<div class="css-jJqEtl">
																<div class="css-iGpMsh">
																	<div class="css-eAlKuC">
																		<img src="{{ asset('assets/desk3x.jpeg') }}" style="height:100%;width:100%" />																	</div>
																</div>
															</div>
															<div class="css-hQxkXU">
																<div class="css-cYTjpz">
																	<div data-baseweb="block" class="css-PKJb">
																		<div class="css-ezKUIh content_ar">الخطوة 4</div>
																		<div class="css-ezKUIh content_en" style="display: none;">Step 4</div>
																		<div class="css-eRKiLo">
																			<div class="css-hPnljU">
																				<h3 class="css-kvOHZp content_ar">يقوم السائق بأخذ الراكب إلى الوجهة</h3>
																				<h3 class="css-kvOHZp content_en" style="display: none;">The driver takes the rider to the destination</h3>
																			</div>
																		</div>
																	</div>
																	<div data-baseweb="block" class="css-PKJb">
																		<div class="css-ggxDdj">
																			<div data-testid="markdown-wrapper" class="css-iNSTPj">
																				<p class="cmln__paragraph content_ar">يمنح التطبيق السائق خيار الوصول إلى إرشادات التنقل خطوة بخطوة.</p>
																				<p class="cmln__paragraph content_en" style="display: none;">The app gives the driver the option to access turn-by-turn directions.</p>
																			</div>
																		</div>
																	</div>
																	<div data-baseweb="block" class="css-PKJb"></div>
																</div>
															</div>

														</div>
													</div>
													<div class="css-iFSlDg">
														<div data-baseweb="block" class="css-iVmsgg css-HXvWP ltr">
															<div class="css-jJqEtl">
																<div class="css-iGpMsh">
																	<div class="css-eAlKuC">
																		<img src="{{ asset('assets/desk4.jpeg') }}" style="height:100%;width:100%" />																	</div>
																</div>
															</div>
															<div class="css-hQxkXU">
																<div class="css-cYTjpz">
																	<div data-baseweb="block" class="css-PKJb">
																		<div class="css-ezKUIh content_ar">الخطوة 5</div>
																		<div class="css-ezKUIh content_en" style="display: none;">Step 5</div>
																		<div class="css-eRKiLo">
																			<div class="css-hPnljU">
																				<h3 class="css-kvOHZp content_ar">يقوم السائق والراكب بترك تقييمات ومراجعات</h3>
																				<h3 class="css-kvOHZp content_en" style="display: none;">The driver and rider leave ratings and reviews</h3>
																			</div>
																		</div>
																	</div>
																	<div data-baseweb="block" class="css-PKJb">
																		<div class="css-ggxDdj">
																			<div data-testid="markdown-wrapper" class="css-iNSTPj">
																				<p class="cmln__paragraph content_ar">في نهاية كل رحلة، يمكن للسائقين والركاب تقييم بعضهم البعض من 1 إلى 5 نجوم. يمكن للركاب أيضًا تقديم مديح وإكرامية للسائق مباشرةً عبر التطبيق.</p>
																				<p class="cmln__paragraph content_en" style="display: none;">At the end of each trip, drivers and riders can rate each other from 1 to 5 stars. Riders also have the option to give the driver compliments and a tip directly in the app.</p>
																			</div>
																		</div>
																	</div>
																	<div data-baseweb="block" class="css-PKJb"></div>
																</div>

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="mb-0">
							<!--begin::Curve top-->
							<div class="landing-curve landing-dark-color">
								<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
								</svg>
							</div>
							<!--end::Curve top-->
							<!--begin::Wrapper-->
							<div class="landing-dark-bg pt-12">
								<!--begin::Container-->
								<div class="container" id="contant">
									<!--begin::Row-->
									<div class="row py-10 py-lg-20">
										<!--begin::Col-->
										<div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
											<!--begin::Block-->
											<div class="rounded landing-dark-border p-9 mb-10">
												<!--begin::Title-->
												<h2 class="text-white content_ar">هل تحتاج إلى ترخيص مخصص؟</h2>
												<h2 class="text-white content_en" style="display: none;">Need a Custom License?</h2>
												<!--end::Title-->
												<!--begin::Text-->
												<span class="fw-normal fs-4 text-gray-700 content_ar">
													راسلنا عبر البريد الإلكتروني
													<a class="text-white opacity-50 text-hover-primary">support@fleet.sy</a>
												</span>
												<span class="fw-normal fs-4 text-gray-700 content_en" style="display: none;">
													Contact us via email
													<a class="text-white opacity-50 text-hover-primary">support@fleet.sy</a>
												</span>
												<!--end::Text-->
											</div>
											<!--end::Block-->
											<!--begin::Block-->
											<div class="rounded landing-dark-border p-9">
												<!--begin::Title-->
												<h2 class="text-white content_ar">ماذا عن مشروع مخصص؟</h2>
												<h2 class="text-white content_en" style="display: none;">How about a Custom Project?</h2>
												<!--end::Title-->
												<!--begin::Text-->
												<span class="fw-normal fs-4 text-gray-700 content_ar">
													استخدم خدمة التطوير المخصصة لدينا.
													<a class="text-white opacity-50 text-hover-primary">
														0116131394-963+
													</a>
												</span>
												<span class="fw-normal fs-4 text-gray-700 content_en" style="display: none;">
													Use our custom development service.
													<a class="text-white opacity-50 text-hover-primary">
														+963-0116131394
													</a>
												</span>
												<!--end::Text-->
											</div>
											<!--end::Block-->
										</div>

										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-lg-6 ps-lg-16">
											<!--begin::Navs-->
											<div class="d-flex justify-content-center">
											  <!--begin::Links-->
											  <div class="d-flex fw-bold flex-column me-20">
												<!--begin::Subtitle-->
												<h4 id="subtitle-fleet-ar" class="fw-bolder text-gray-400 mb-6 content_ar">المزيد لـ Fleet</h4>
												<h4 id="subtitle-fleet-en" class="fw-bolder text-gray-400 mb-6 content_en" style="display: none;">More for Fleet</h4>
												<!--end::Subtitle-->
												<!--begin::Link-->
												<a id="link-faq-ar" href="{{ route('policy') }}" class="text-white opacity-50 text-hover-primary fs-5 mb-6 content_ar">سياسية الخصوصية</a>
												<a id="link-faq-ar" href="{{ route('policy') }}" class="text-white opacity-50 text-hover-primary fs-5 mb-6 content_en" style="display: none;">Privacy Policy</a>
												<a id="link-faq-ar" href="{{ route('classic') }}" class="text-white opacity-50 text-hover-primary fs-5 mb-6 content_ar">الأسئلة الشائعة</a>
												<a id="link-faq-en" href="{{ route('classic') }}" class="text-white opacity-50 text-hover-primary fs-5 mb-6 content_en" style="display: none;">FAQ</a>
												<a id="link-join-ar" href="{{ route('apply') }}" class="text-white opacity-50 text-hover-primary fs-5 mb-6 content_ar">انضم إلينا</a>
												<a id="link-join-en" href="{{ route('apply') }}" class="text-white opacity-50 text-hover-primary fs-5 mb-6 content_en" style="display: none;">Join US</a>

											  </div>

											  <!--end::Links-->
											  <!--begin::Links-->
											  <div class="d-flex fw-bold flex-column me-lg-20">
												<!--begin::Subtitle-->
												<h4 id="subtitle-connect-ar" class="fw-bolder text-gray-400 mb-6 content_ar">ابقى على تواصل</h4>
												<h4 id="subtitle-connect-en" class="fw-bolder text-gray-400 mb-6 content_en" style="display: none;">Stay Connected</h4>
												<!--end::Subtitle-->
												<!--begin::Link-->
												<a href="" class="mb-6 d-flex align-items-center">
												  <img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2" alt="" />
												  <span id="link-facebook-ar" class="text-white opacity-50 text-hover-primary fs-5 content_ar">فيسبوك</span>
												  <span id="link-facebook-en" class="text-white opacity-50 text-hover-primary fs-5 content_en" style="display: none;">Facebook</span>
												</a>
												<!--end::Link-->
												<!--begin::Link-->
												<a href="" class="mb-6 d-flex align-items-center">
												  <img src="assets/media/svg/brand-logos/github.svg" class="h-20px me-2" alt="" />
												  <span id="link-github-ar" class="text-white opacity-50 text-hover-primary fs-5 content_ar">جيت هاب</span>
												  <span id="link-github-en" class="text-white opacity-50 text-hover-primary fs-5 content_en" style="display: none;">Github</span>
												</a>
												<!--end::Link-->
												<!--begin::Link-->
												<a href="" class="mb-6 d-flex align-items-center">
												  <img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2" alt="" />
												  <span id="link-twitter-ar" class="text-white opacity-50 text-hover-primary fs-5 content_ar">تويتر</span>
												  <span id="link-twitter-en" class="text-white opacity-50 text-hover-primary fs-5 content_en" style="display: none;">Twitter</span>
												</a>
												<!--end::Link-->
												<!--begin::Link-->
												<a href="" class="mb-6 d-flex align-items-center">
												  <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px me-2" alt="" />
												  <span id="link-dribbble-ar" class="text-white opacity-50 text-hover-primary fs-5 content_ar">دريبل</span>
												  <span id="link-dribbble-en" class="text-white opacity-50 text-hover-primary fs-5 content_en" style="display: none;">Dribbble</span>
												</a>
												<!--end::Link-->
												<!--begin::Link-->
												<a href="" class="mb-6 d-flex align-items-center">
												  <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2" alt="" />
												  <span id="link-instagram-ar" class="text-white opacity-50 text-hover-primary fs-5 content_ar">انستغرام</span>
												  <span id="link-instagram-en" class="text-white opacity-50 text-hover-primary fs-5 content_en" style="display: none;">Instagram</span>
												</a>
												<!--end::Link-->
											  </div>
											  <!--end::Links-->
											</div>
											<!--end::Navs-->
										  </div>

										<!--end::Col-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Container-->
								<!--begin::Separator-->
								<div class="landing-dark-separator"></div>
								<!--end::Separator-->
								<!--begin::Container-->
								<div class="container">
									<!--begin::Wrapper-->
									<div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
										<!--begin::Copyright-->
										<div class="d-flex align-items-center order-2 order-md-1">
											<!--begin::Logo-->
											<a href="{{ route('welcome') }}">
												<img src="assets/logo.jpg" alt="Logo" src="" class="h-20px h-md-25px" />
											</a>
											<!--end::Logo image-->
											<!--begin::Logo image-->
											<span class="mx-5 fs-6 fw-bold text-gray-600 pt-1" href="{{ asset('uploads/1713342078.png') }}">© 2024 Fleet.</span>
											<!--end::Logo image-->
										</div>

									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Container-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Footer Section-->
						<!--begin::Scrolltop-->
						<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
							<span class="svg-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
									<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
					</main>
				</div>
				<div class="css-PKJb"></div>
			</div>
		</div>
			<!--end::Main-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
		<script src="assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/custom/landing.js"></script>
		<script src="assets/js/custom/pages/pricing/general.js"></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
    </script>
	<script>
		function changeLanguage(lang) {
			content_ar =document.getElementsByClassName('content_ar')
			content_en =document.getElementsByClassName('content_en')
			body = document.getElementById("kt_body")
			if (lang === 'ar') {
				body.style.direction = "rtl"
				body.style.textAlign = "right"

				for (let index = 0; index < content_ar.length; index++) {
					content_ar[index].style.display = 'block';

				}
				for (let index = 0; index < content_en.length; index++) {
					content_en[index].style.display = 'none';

				}

			} else if (lang === 'en') {
				body.style.direction = "ltr"
				body.style.textAlign = "left"

				for (let index = 0; index < content_ar.length; index++) {
					content_ar[index].style.display = 'none';

				}
				for (let index = 0; index < content_en.length; index++) {
					content_en[index].style.display = 'block';

				}
			}
			}

	</script>

	</body>
	<!--end::Body-->
</html>
