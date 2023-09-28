@extends('master.master')

@section('content')
<main class="grow">
	<main class="pt-6 pb-8 bg-white lg:pb-16 dark:bg-gray-900">
		<div class="flex justify-between px-4 mx-auto max-w-8xl">
			<div class="hidden mb-6 xl:block lg:w-80">
				<div class="sticky top-36">
					<aside>
						<div class="p-6 mb-6 font-medium text-gray-500 bg-white rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
							<h1 class="mb-2 font-bold text-gray-900 uppercase dark:text-white">Flowbite Blog</h1>
							<p class="text-sm text-gray-500 dark:text-gray-400">
								Blog posts, articles, and tutorials about web development and design.
							</p>
						</div>
						<div class="p-6 mb-6 font-medium text-gray-500 bg-white rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
							<h4 class="mb-4 font-bold text-gray-900 uppercase dark:text-white">Resources</h4>
							<a class="inline-flex justify-center items-center p-5 mb-4 w-full text-base font-medium text-gray-500 bg-gray-50 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-700 dark:hover:bg-gray-600 dark:hover:text-white" href="/docs/getting-started/introduction/">
								<svg aria-hidden="true" class="mr-3 w-5 h-5" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M24.5199 12.9424C24.4458 13.4528 24.1092 14.1463 23.723 14.7492C23.2358 15.51 22.4627 16.0428 21.5779 16.2278L17.6802 17.0429C17.0537 17.1739 16.4857 17.5017 16.0592 17.9785L13.5035 20.8352C13.0232 21.3721 12.6875 21.244 12.6875 20.5239C12.6817 20.5506 11.4191 23.8067 14.7651 25.7366C16.0507 26.4782 17.9013 26.2117 19.1869 25.4702L25.9988 21.5411C28.5463 20.0717 30.345 17.5859 30.9428 14.7084C30.9665 14.5946 30.9848 14.4803 31.0045 14.3662L24.5199 12.9424Z" fill="url(#paint0_linear_4151_62980)"></path>
									<path d="M22.7528 9.01774C24.0384 9.75928 24.5637 10.8633 24.5637 12.3464C24.5637 12.5477 24.5479 12.7466 24.5194 12.9425L27.2641 14.1215L31.004 14.3663C31.4829 11.5948 30.5444 8.74202 28.862 6.47445C27.5959 4.768 25.9667 3.28713 24.0081 2.15738C22.417 1.23966 20.7636 0.635005 19.1025 0.303223L17.2361 2.72023L16.6465 5.49559L22.7528 9.01774Z" fill="url(#paint1_linear_4151_62980)"></path>
									<path d="M0.783353 11.0516C0.782654 11.0537 0.784588 11.0544 0.785316 11.0522C0.929339 10.6202 1.10993 10.1383 1.33539 9.62344C2.5131 6.93406 4.78262 5.14038 7.57467 4.22583C10.3667 3.31131 13.4153 3.63188 15.9599 5.09963L16.6463 5.49553L19.1023 0.303168C11.2907 -1.25701 3.30703 3.33229 0.793284 11.0215C0.792083 11.0251 0.787713 11.038 0.783353 11.0516Z" fill="url(#paint2_linear_4151_62980)"></path>
									<path d="M18.9201 25.4702C17.6345 26.2117 16.0506 26.2117 14.765 25.4702C14.5904 25.3695 14.4259 25.2563 14.2703 25.1338L12.0093 26.6883L10.0605 29.8374C12.2236 31.6374 15.0324 32.2161 17.8392 31.8943C19.9515 31.6521 22.0498 30.9829 24.0084 29.8532C25.5995 28.9355 26.9503 27.8073 28.0685 26.5359L26.9065 23.7126L25.0265 21.948L18.9201 25.4702Z" fill="url(#paint3_linear_4151_62980)"></path>
									<path d="M14.2694 25.1339C13.2789 24.3537 12.6864 23.157 12.6864 21.8752V21.7474V11.0722C12.6864 10.4685 12.8643 10.3659 13.3876 10.6677C12.5816 10.2028 10.7195 8.60676 8.42044 9.9329C7.13484 10.6744 6.07617 12.3113 6.07617 13.7944V21.6526C6.07617 24.5915 7.59833 27.657 9.79375 29.613C9.88059 29.6904 9.97049 29.7633 10.0596 29.8375L14.2694 25.1339Z" fill="url(#paint4_linear_4151_62980)"></path>
									<path d="M27.9097 5.31206C27.9081 5.31036 27.9066 5.31173 27.9081 5.31343C28.2106 5.65404 28.538 6.05126 28.8716 6.50375C30.614 8.8674 31.2651 11.8611 30.6618 14.734C30.0586 17.607 28.2564 20.0843 25.7118 21.5521L25.0254 21.948L28.0674 26.5359C33.3256 20.5574 33.3392 11.3552 27.9308 5.3357C27.9282 5.33282 27.9193 5.32262 27.9097 5.31206Z" fill="url(#paint5_linear_4151_62980)"></path>
									<path d="M6.34355 13.7944C6.34354 12.3113 7.13551 10.9408 8.42113 10.1993C8.59564 10.0986 8.77601 10.0129 8.96002 9.93951L8.74304 7.20603L7.21861 4.07861C4.57671 5.05005 2.4397 7.05766 1.31528 9.64708C0.469097 11.5957 9.792e-06 13.7458 0 16.0052C0 17.8407 0.302549 19.5735 0.845532 21.1767L3.87391 21.583L6.34355 20.8387V13.7944Z" fill="url(#paint6_linear_4151_62980)"></path>
									<path d="M8.96016 9.93951C10.1317 9.47264 11.4653 9.5584 12.5764 10.1993L12.6872 10.2632L21.5826 15.3941C22.2066 15.754 22.1499 16.1082 21.4446 16.2557L21.9578 16.1484C22.633 16.0072 23.2499 15.6621 23.7217 15.1592C24.5328 14.2946 24.8306 13.2515 24.8306 12.3463C24.8306 10.8632 24.0386 9.49274 22.753 8.7512L15.9411 4.82209C13.3936 3.35267 10.3395 3.03934 7.54622 3.96083C7.43572 3.99727 7.32756 4.0386 7.21875 4.07861L8.96016 9.93951Z" fill="url(#paint7_linear_4151_62980)"></path>
									<path d="M19.3224 31.6521C19.3246 31.6516 19.3242 31.6496 19.3219 31.6501C18.8755 31.7414 18.3674 31.8262 17.8084 31.8885C14.8882 32.2142 11.9677 31.2807 9.77888 29.3223C7.59011 27.3638 6.34372 24.5659 6.34372 21.6304L6.34371 20.8386L0.845703 21.1766C3.39905 28.7153 11.3691 33.3282 19.2913 31.6585C19.2951 31.6577 19.3084 31.6551 19.3224 31.6521Z" fill="url(#paint8_linear_4151_62980)"></path>
									<defs>
										<linearGradient id="paint0_linear_4151_62980" x1="20.0604" y1="23.7696" x2="23.2079" y2="12.8065" gradientUnits="userSpaceOnUse">
											<stop stop-color="#1724C9"></stop>
											<stop offset="1" stop-color="#1C64F2"></stop>
										</linearGradient>
										<linearGradient id="paint1_linear_4151_62980" x1="27.3093" y1="10.4001" x2="19.0297" y2="2.14962" gradientUnits="userSpaceOnUse">
											<stop stop-color="#1C64F2"></stop>
											<stop offset="1" stop-color="#0092FF"></stop>
										</linearGradient>
										<linearGradient id="paint2_linear_4151_62980" x1="16.1642" y1="5.0209" x2="3.67407" y2="5.81015" gradientUnits="userSpaceOnUse">
											<stop stop-color="#0092FF"></stop>
											<stop offset="1" stop-color="#45B2FF"></stop>
										</linearGradient>
										<linearGradient id="paint3_linear_4151_62980" x1="15.32" y1="28.6624" x2="26.5369" y2="25.6356" gradientUnits="userSpaceOnUse">
											<stop stop-color="#1C64F2"></stop>
											<stop offset="1" stop-color="#0092FF"></stop>
										</linearGradient>
										<linearGradient id="paint4_linear_4151_62980" x1="7.26808" y1="15.6825" x2="15.2317" y2="23.9345" gradientUnits="userSpaceOnUse">
											<stop stop-color="#1724C9"></stop>
											<stop offset="1" stop-color="#1C64F2"></stop>
										</linearGradient>
										<linearGradient id="paint5_linear_4151_62980" x1="25.4497" y1="21.6353" x2="31.0061" y2="10.4342" gradientUnits="userSpaceOnUse">
											<stop stop-color="#0092FF"></stop>
											<stop offset="1" stop-color="#45B2FF"></stop>
										</linearGradient>
										<linearGradient id="paint6_linear_4151_62980" x1="5.36387" y1="9.13067" x2="2.39054" y2="20.3063" gradientUnits="userSpaceOnUse">
											<stop stop-color="#1C64F2"></stop>
											<stop offset="1" stop-color="#0092FF"></stop>
										</linearGradient>
										<linearGradient id="paint7_linear_4151_62980" x1="20.5432" y1="8.59912" x2="9.6778" y2="11.3044" gradientUnits="userSpaceOnUse">
											<stop stop-color="#1724C9"></stop>
											<stop offset="1" stop-color="#1C64F2"></stop>
										</linearGradient>
										<linearGradient id="paint8_linear_4151_62980" x1="6.40691" y1="21.3563" x2="13.3327" y2="31.7743" gradientUnits="userSpaceOnUse">
											<stop stop-color="#0092FF"></stop>
											<stop offset="1" stop-color="#45B2FF"></stop>
										</linearGradient>
									</defs>
								</svg>
								<span class="w-full">Flowbite Library</span>
								<svg class="ml-3 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
								</svg>
							</a>
							<a class="inline-flex justify-center items-center p-5 mb-4 w-full text-base font-medium text-gray-500 bg-gray-50 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-700 dark:hover:bg-gray-600 dark:hover:text-white" href="/figma/">
								<svg aria-hidden="true" class="mr-3 w-5 h-5" viewBox="0 0 22 31" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_4151_63004)">
										<path d="M5.50085 30.1242C8.53625 30.1242 10.9998 27.8749 10.9998 25.1035V20.0828H5.50085C2.46546 20.0828 0.00195312 22.332 0.00195312 25.1035C0.00195312 27.8749 2.46546 30.1242 5.50085 30.1242Z" fill="#0ACF83"></path>
										<path d="M0.00195312 15.062C0.00195312 12.2905 2.46546 10.0413 5.50085 10.0413H10.9998V20.0827H5.50085C2.46546 20.0827 0.00195312 17.8334 0.00195312 15.062Z" fill="#A259FF"></path>
										<path d="M0.00195312 5.02048C0.00195312 2.24904 2.46546 -0.000244141 5.50085 -0.000244141H10.9998V10.0412H5.50085C2.46546 10.0412 0.00195312 7.79193 0.00195312 5.02048Z" fill="#F24E1E"></path>
										<path d="M11 -0.000244141H16.4989C19.5343 -0.000244141 21.9978 2.24904 21.9978 5.02048C21.9978 7.79193 19.5343 10.0412 16.4989 10.0412H11V-0.000244141Z" fill="#FF7262"></path>
										<path d="M21.9978 15.062C21.9978 17.8334 19.5343 20.0827 16.4989 20.0827C13.4635 20.0827 11 17.8334 11 15.062C11 12.2905 13.4635 10.0413 16.4989 10.0413C19.5343 10.0413 21.9978 12.2905 21.9978 15.062Z" fill="#1ABCFE"></path>
									</g>
									<defs>
										<clipPath id="clip0_4151_63004">
											<rect width="22" height="30.1244" fill="white" transform="translate(0 -0.000244141)"></rect>
										</clipPath>
									</defs>
								</svg>
								<span class="w-full">Figma design system</span>
								<svg class="ml-3 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
								</svg>
							</a>
							<a href="https://themesberg.com/templates/tailwind-css" class="inline-flex justify-center items-center p-5 w-full text-base font-medium text-gray-500 bg-gray-50 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-700 dark:hover:bg-gray-600 dark:hover:text-white">
								<svg aria-hidden="true" class="mr-3 w-5 h-5" viewBox="0 0 26 31" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_4151_62985)">
										<path d="M25.7689 0.901322L15.1763 3.49437C15.0758 3.51776 14.9717 3.52086 14.87 3.50352C14.7683 3.48617 14.6711 3.44871 14.5841 3.39335L9.57667 0.121964C9.48513 0.0624589 9.38179 0.0234753 9.27373 0.00769593C9.16568 -0.00808342 9.05549 -0.000283916 8.95074 0.0305577L0.284074 2.58031C0.204603 2.59938 0.133665 2.64415 0.0822909 2.70766C0.030917 2.77117 0.001987 2.84986 0 2.9315L0 8.11761L8.95074 5.48607C9.05549 5.45522 9.16568 5.44743 9.27373 5.4632C9.38179 5.47898 9.48513 5.51797 9.57667 5.57747L14.5841 8.84404C14.6701 8.90151 14.7674 8.94022 14.8694 8.95762C14.9715 8.97503 15.076 8.97075 15.1763 8.94507L26 6.2991V1.07451C25.9987 1.02559 25.9784 0.979095 25.9433 0.944943C25.9082 0.91079 25.8612 0.891685 25.8122 0.891701L25.7689 0.901322Z" fill="#FF7F66"></path>
										<path d="M19.377 13.3953L15.1737 14.4056C15.0733 14.4301 14.969 14.4338 14.8671 14.4164C14.7652 14.399 14.668 14.361 14.5815 14.3046L9.57406 11.0332C9.5541 11.0191 9.53145 11.0092 9.50752 11.0042C9.48359 10.9993 9.45888 10.9992 9.43495 11.0042C9.41101 11.0092 9.38835 11.019 9.36838 11.0331C9.34841 11.0472 9.33156 11.0652 9.31887 11.0861C9.29667 11.1132 9.28474 11.1473 9.28517 11.1823V16.1038C9.28501 16.164 9.2999 16.2232 9.32849 16.2762C9.35708 16.3291 9.39846 16.374 9.44887 16.4069L14.5815 19.7745C14.6684 19.8301 14.7658 19.8673 14.8676 19.8839C14.9695 19.9004 15.0736 19.8959 15.1737 19.8707L19.6178 18.8075C20.336 18.6343 20.9753 18.2254 21.4335 17.6463C21.8918 17.0672 22.1425 16.3514 22.1455 15.6131V15.5121C22.1367 14.9234 21.8944 14.3624 21.472 13.952C21.0495 13.5416 20.4814 13.3154 19.8922 13.3232C19.7183 13.3283 19.5456 13.3525 19.377 13.3953Z" fill="#FF7F66"></path>
										<path d="M19.377 24.3062L15.1737 25.3165C15.0732 25.3399 14.9691 25.343 14.8674 25.3256C14.7657 25.3083 14.6685 25.2708 14.5815 25.2154L9.57405 21.9441C9.55416 21.9304 9.53176 21.9208 9.50814 21.9158C9.48452 21.9108 9.46015 21.9106 9.43643 21.915C9.41271 21.9195 9.39011 21.9286 9.36993 21.9419C9.34975 21.9551 9.3324 21.9722 9.31886 21.9922C9.29698 22.0213 9.28516 22.0568 9.28516 22.0932V27.0147C9.285 27.0748 9.29989 27.1341 9.32848 27.187C9.35707 27.24 9.39845 27.2849 9.44886 27.3178L14.5815 30.6854C14.6675 30.7429 14.7647 30.7816 14.8668 30.799C14.9688 30.8164 15.0734 30.8121 15.1737 30.7864L19.6178 29.7184C20.3368 29.5467 20.9771 29.1383 21.4356 28.5588C21.8941 27.9794 22.1442 27.2627 22.1455 26.524V26.423C22.1367 25.8343 21.8944 25.2732 21.4719 24.8628C21.0495 24.4525 20.4813 24.2263 19.8922 24.234C19.7181 24.2368 19.5451 24.261 19.377 24.3062Z" fill="#FF7F66"></path>
										<path opacity="0.32" d="M14.8613 19.8659V14.4344C14.9661 14.4561 15.0743 14.4561 15.1791 14.4344L16.9895 13.9533L18.0487 19.149L15.1598 19.8514C15.0625 19.8774 14.9607 19.8823 14.8613 19.8659ZM19.108 24.3544L15.1791 25.3166C15.0743 25.3382 14.9661 25.3382 14.8613 25.3166V30.7913C14.9661 30.813 15.0743 30.813 15.1791 30.7913L20.1673 29.5694L19.108 24.3544ZM14.8613 8.95966C14.9661 8.98131 15.0743 8.98131 15.1791 8.95966L15.935 8.77685L14.8613 3.50415V8.95966Z" fill="#111928"></path>
										<g opacity="0.16">
											<path opacity="0.16" d="M9.28516 5.4665C9.38726 5.48597 9.48508 5.52344 9.57404 5.57715L14.5815 8.84853C14.6641 8.90343 14.7578 8.93956 14.8559 8.95437V3.49886C14.7578 3.48404 14.6641 3.44792 14.5815 3.39302L9.57404 0.121636C9.48508 0.067925 9.38726 0.0304579 9.28516 0.0109863V5.4665Z" fill="#111928"></path>
											<path opacity="0.16" d="M14.8559 25.3269C14.7584 25.3073 14.6653 25.2698 14.5815 25.2163L9.57405 21.9449C9.53253 21.9175 9.48184 21.9077 9.43309 21.9176C9.38434 21.9275 9.34153 21.9564 9.31405 21.9978C9.29511 22.0263 9.28506 22.0598 9.28516 22.094V27.0155C9.285 27.0757 9.29989 27.1349 9.32848 27.1878C9.35707 27.2408 9.39845 27.2857 9.44886 27.3186L14.5815 30.6862C14.6659 30.7375 14.7589 30.7733 14.8559 30.792V25.3269Z" fill="#111928"></path>
											<path opacity="0.16" d="M9.57405 11.0315C9.53253 11.0042 9.48184 10.9943 9.43309 11.0043C9.38434 11.0142 9.34153 11.043 9.31405 11.0845C9.29511 11.113 9.28506 11.1465 9.28516 11.1807V16.1022C9.285 16.1623 9.29989 16.2216 9.32848 16.2745C9.35707 16.3274 9.39845 16.3724 9.44886 16.4053L14.5815 19.7729C14.6652 19.8257 14.7584 19.8616 14.8559 19.8787V14.4328C14.7575 14.4162 14.6638 14.3785 14.5815 14.3222L9.57405 11.0315Z" fill="#111928"></path>
										</g>
									</g>
									<defs>
										<clipPath id="clip0_4151_62985">
											<rect width="26" height="30.8097" fill="white" transform="translate(0 -0.000244141)"></rect>
										</clipPath>
									</defs>
								</svg>
								<span class="w-full">Tailwind CSS Themes</span>
								<svg class="ml-3 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
								</svg>
							</a>
						</div>
						<div class="p-6 mb-6 text-gray-500 bg-white rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
							<h4 class="mb-4 font-bold text-gray-900 uppercase dark:text-white">Become an author</h4>
							<p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
								Do you want to contribute by writing guest posts on this blog?
							</p>
							<p class="mb-4 text-sm text-gray-500 dark:text-gray-400">
								Please contact us and send us a resume of previous articles that you have written.
							</p>
							<a class="text-white block text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 w-full" href="/contact/">Get in touch</a>
						</div>
					</aside>
				</div>
			</div>
			<div class="w-full max-w-2xl mx-auto">
				<div class="flex items-center justify-between py-4 border-t border-b border-gray-200 dark:border-gray-700 not-format">
					<h1 class="text-sm font-bold text-gray-900 lg:mb-0 dark:text-white">6 posts in total</h1>
				</div>
				<div class="divide-y divide-gray-200 dark:divide-gray-700">

                    @foreach ($allArticles as $value)


                    <article class="py-6">
						<div class="flex items-center justify-between mb-3 text-gray-500">
							<div>
								<a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2" href="/blog/tag/flowbite/">
                                    #{{$value->categoryarticle->name}}

                                </a>
							</div>
							<span class="text-sm"> <time datetime="1677146503000"> {{$value->created_at->diffForHumans()}}</time></span>
						</div>
						<h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline"><a href="/blog/state-of-flowbite-2022/">{{$value->title}}</a></h2>
						<p class="mb-5 text-gray-500 dark:text-gray-400">
							{{$value->description}}
						</p>
						<div class="flex items-center justify-between">
							<a class="flex items-center space-x-2" href="/blog/author/zoltan/">
								<img class="rounded-full w-7 h-7" src="{{asset('kgs.jpg')}}" alt="Zoltán Szőgyényi profile picture">
								<span class="font-medium dark:text-white">KGS INFORMATIQUE</span>
							</a>
							<a class="inline-flex items-center font-medium text-blue-600 hover:underline dark:text-blue-500" href="/blog/state-of-flowbite-2022/">
								Lire la suite
								<svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
								</svg>
							</a>
						</div>
					</article>
                    @endforeach

                    <div class="d-flex">
                        {!! $allArticles->links() !!}
                    </div>


				</div>
			</div>
			<aside class="hidden lg:block lg:w-80" aria-labelledby="sidebar-label">
				<div class="sticky top-36">
					<h3 id="sidebar-label" class="sr-only">Sidebar</h3>
					<div class="lg:ml-auto">
						<script id="_carbonads_js" src="//cdn.carbonads.com/carbon.js?serve=CK7D4KQE&amp;placement=flowbitedesign"></script>
					</div>
					<div class="p-6 pb-4 mt-6 mb-6 font-medium text-gray-500 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
						<h4 class="mb-4 font-bold text-gray-900 uppercase dark:text-white">Recommended topics</h4>
						<div class="flex flex-wrap">
							<a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2" href="/blog/tag/alpine-js/">#Alpine.js</a>
							<a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2" href="/blog/tag/angular/">#Angular</a>
							<a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2" href="/blog/tag/flowbite/">#Flowbite</a>
							<a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2" href="/blog/tag/laravel/">#Laravel</a>
							<a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2" href="/blog/tag/next-js/">#Next.js</a>
							<a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2" href="/blog/tag/tailwind-css/">#Tailwind CSS</a>
						</div>
					</div>
					<div class="p-6 mb-6 font-medium text-gray-500 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
						<h4 class="mb-4 font-bold text-gray-900 uppercase dark:text-white">Community authors</h4>
						<ul class="space-y-4 text-gray-500 dark:text-gray-400">
							<li>
								<a class="flex items-start" href="/blog/author/david/">
									<div class="mr-3 shrink-0">
										<img class="w-6 h-6 mt-1 rounded-full" src="https://publisher.flowbite.com/content/images/2022/12/david-dumont-profile-picture.jpeg" alt="David Dumont profile picture">
									</div>
									<div class="mr-3">
										<span class="block font-medium text-gray-900 dark:text-white">David Dumont</span>
										<span class="text-sm">Co-founder at Suncel: a CMS for Next.js apps and websites.</span>
									</div>
								</a>
							</li>
							<li>
								<a class="flex items-start" href="/blog/author/harikrishna/">
									<div class="mr-3 shrink-0">
										<img class="w-6 h-6 mt-1 rounded-full" src="https://publisher.flowbite.com/content/images/2022/11/Author-Headshot.jpg" alt="Harikrishna Kundariya profile picture">
									</div>
									<div class="mr-3">
										<span class="block font-medium text-gray-900 dark:text-white">Harikrishna Kundariya</span>
										<span class="text-sm">Marketer, developer, IoT, ChatBot &amp; Blockchain savvy, CEO of eSparkBiz.</span>
									</div>
								</a>
							</li>
							<li>
								<a class="flex items-start" href="/blog/author/rich/">
									<div class="mr-3 shrink-0">
										<img class="w-6 h-6 mt-1 rounded-full" src="https://publisher.flowbite.com/content/images/2023/01/1605304654466.jpg" alt="Rich Klein profile picture">
									</div>
									<div class="mr-3">
										<span class="block font-medium text-gray-900 dark:text-white">Rich Klein</span>
										<span class="text-sm">Technical writer, web developer, and customer success specialist.</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</aside>
		</div>
	</main>
</main>










{{-- <div class="w-full px-4 mx-auto max-w-8xl">
    <div class="lg:flex">

      <aside id="sidebar" class="fixed inset-0 z-20 flex-none hidden h-full w-72 lg:static lg:h-auto lg:overflow-y-visible lg:pt-0 lg:w-48 lg:block" aria-labelledby="sidebar-label">
        <h4 id="sidebar-label" class="sr-only">Browse docs</h4>
        <div id="navWrapper" class="overflow-y-auto z-20 h-full bg-white scrolling-touch max-w-2xs lg:h-[calc(100vh-3rem)] lg:block lg:sticky top:24 lg:top-28 dark:bg-gray-900 lg:mr-0">
    <nav id="nav" class="pt-16 px-1 pl-3 lg:pl-0 lg:pt-2 font-normal text-base lg:text-sm pb-10 lg:pb-20 sticky?lg:h-(screen-18)" aria-label="Docs navigation"><ul class="mb-0 list-unstyled">
          <li class="mt-8">
            <h5 class="mb-2 text-sm font-semibold tracking-wide text-gray-900 uppercase lg:text-xs dark:text-white">Getting started</h5>
            <ul class="py-1 list-unstyled fw-normal small">
                <li>
                  <a href="https://flowbite.com/docs/getting-started/introduction/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Introduction </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/quickstart/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Quickstart </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/typescript/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">TypeScript </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/license/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">License </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/changelog/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Changelog </a>
                </li>
            </ul>
          </li>
          <li class="mt-8">
            <h5 class="mb-2 text-sm font-semibold tracking-wide text-gray-900 uppercase lg:text-xs dark:text-white">Integration guides</h5>
            <ul class="py-1 list-unstyled fw-normal small">
                <li>
                  <a href="https://flowbite.com/docs/getting-started/react/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">React </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/next-js/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Next.js </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/vue/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Vue </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/nuxt-js/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Nuxt </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/svelte/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Svelte </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/angular/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Angular <span><span class="bg-blue-100 text-blue-800 text-2xs font-semibold ml-2 px-1.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-100 dark:border-blue-400">NEW</span></span></a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/astro/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Astro </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/remix/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Remix </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/meteor-js/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Meteor.js <span><span class="bg-blue-100 text-blue-800 text-2xs font-semibold ml-2 px-1.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-100 dark:border-blue-400">NEW</span></span></a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/gatsby/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Gatsby </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/solid-js/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">SolidJS </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/qwik/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Qwik </a>
                </li>
                <li>
                  <a href="index.html" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white  !text-blue-700 hover:!text-blue-700 dark:!text-blue-500 dark:hover:!text-blue-500" aria-current="page">Laravel <span><span class="bg-blue-100 text-blue-800 text-2xs font-semibold ml-2 px-1.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-100 dark:border-blue-400">NEW</span></span></a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/symfony/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Symfony </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/rails/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Rails </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/phoenix/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Phoenix </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/django/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Django </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/flask/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Flask </a>
                </li>
            </ul>
          </li>
          <li class="mt-8">
            <h5 class="mb-2 text-sm font-semibold tracking-wide text-gray-900 uppercase lg:text-xs dark:text-white">Customize</h5>
            <ul class="py-1 list-unstyled fw-normal small">
                <li>
                  <a href="https://flowbite.com/docs/customize/configuration/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Configuration </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/customize/dark-mode/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Dark mode </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/customize/theming/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Theming </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/customize/colors/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Colors </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/customize/icons/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Icons </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/customize/optimization/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Optimization </a>
                </li>
            </ul>
          </li>
          <li class="mt-8">
            <h5 class="mb-2 text-sm font-semibold tracking-wide text-gray-900 uppercase lg:text-xs dark:text-white">Components</h5>
            <ul class="py-1 list-unstyled fw-normal small">
                <li>
                  <a href="https://flowbite.com/docs/components/accordion/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Accordion </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/alerts/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Alerts </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/avatar/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Avatar </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/badge/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Badge </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/banner/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Banner </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/bottom-navigation/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Bottom Navigation </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/breadcrumb/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Breadcrumb </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/buttons/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Buttons </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/button-group/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Button Group </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/card/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Card </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/carousel/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Carousel </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/device-mockups/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Device Mockups </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/drawer/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Drawer </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/dropdowns/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Dropdowns </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/footer/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Footer </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/forms/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Forms </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/gallery/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Gallery </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/indicators/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Indicators </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/jumbotron/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Jumbotron </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/kbd/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">KBD </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/list-group/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">List Group </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/mega-menu/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Mega menu </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/modal/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Modal </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/navbar/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Navbar </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/pagination/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Pagination </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/popover/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Popover </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/progress/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Progress </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/rating/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Rating </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/sidebar/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Sidebar </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/skeleton/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Skeleton </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/speed-dial/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Speed Dial </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/spinner/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Spinner </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/stepper/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Stepper </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/tables/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Tables </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/tabs/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Tabs </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/timeline/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Timeline </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/toast/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Toast </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/tooltips/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Tooltips </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/typography/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Typography </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/video/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Video </a>
                </li>
            </ul>
          </li>
          <li class="mt-8">
            <h5 class="mb-2 text-sm font-semibold tracking-wide text-gray-900 uppercase lg:text-xs dark:text-white">Forms</h5>
            <ul class="py-1 list-unstyled fw-normal small">
                <li>
                  <a href="https://flowbite.com/docs/forms/input-field/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Input Field </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/forms/file-input/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">File Input </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/forms/search-input/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Search Input </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/forms/select/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Select </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/forms/textarea/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Textarea </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/forms/checkbox/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Checkbox </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/forms/radio/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Radio </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/forms/toggle/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Toggle </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/forms/range/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Range </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/forms/floating-label/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Floating Label </a>
                </li>
            </ul>
          </li>
          <li class="mt-8">
            <h5 class="mb-2 text-sm font-semibold tracking-wide text-gray-900 uppercase lg:text-xs dark:text-white">Typography</h5>
            <ul class="py-1 list-unstyled fw-normal small">
                <li>
                  <a href="https://flowbite.com/docs/typography/headings/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Headings </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/typography/paragraphs/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Paragraphs </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/typography/blockquote/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Blockquote </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/typography/images/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Images </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/typography/lists/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Lists </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/typography/links/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Links </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/typography/text/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Text </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/typography/hr/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">HR </a>
                </li>
            </ul>
          </li>
          <li class="mt-8">
            <h5 class="mb-2 text-sm font-semibold tracking-wide text-gray-900 uppercase lg:text-xs dark:text-white">Plugins</h5>
            <ul class="py-1 list-unstyled fw-normal small">
                <li>
                  <a href="https://flowbite.com/docs/plugins/charts/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Charts <span><span class="bg-blue-100 text-blue-800 text-2xs font-semibold ml-2 px-1.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-100 dark:border-blue-400">NEW</span></span></a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/plugins/datepicker/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Datepicker </a>
                </li>
            </ul>
          </li>
      </ul>
    </nav>
  </div>


      </aside>

      <div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/60" id="sidebarBackdrop"></div>

      <main id="content-wrapper" class="flex-auto w-full min-w-0 lg:static lg:max-h-full lg:overflow-visible">
        <div class="flex w-full">


          <div class="flex-auto max-w-4xl min-w-0 pt-6 lg:px-8 lg:pt-8 pb:12 xl:pb-24 lg:pb-16">

            <div class="pb-4 mb-8 border-b border-gray-200 dark:border-gray-800">



                <aside class="mb-5" aria-label="Integration requires Laravel">
                  <span class="inline-flex items-center justify-between px-1 py-1 pr-4 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white">
                    <span class="text-xs text-[#ff2d20] rounded-full bg-white dark:bg-gray-900 px-3 py-1.5 mr-3">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="laravel" class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504.4,115.83a5.72,5.72,0,0,0-.28-.68,8.52,8.52,0,0,0-.53-1.25,6,6,0,0,0-.54-.71,9.36,9.36,0,0,0-.72-.94c-.23-.22-.52-.4-.77-.6a8.84,8.84,0,0,0-.9-.68L404.4,55.55a8,8,0,0,0-8,0L300.12,111h0a8.07,8.07,0,0,0-.88.69,7.68,7.68,0,0,0-.78.6,8.23,8.23,0,0,0-.72.93c-.17.24-.39.45-.54.71a9.7,9.7,0,0,0-.52,1.25c-.08.23-.21.44-.28.68a8.08,8.08,0,0,0-.28,2.08V223.18l-80.22,46.19V63.44a7.8,7.8,0,0,0-.28-2.09c-.06-.24-.2-.45-.28-.68a8.35,8.35,0,0,0-.52-1.24c-.14-.26-.37-.47-.54-.72a9.36,9.36,0,0,0-.72-.94,9.46,9.46,0,0,0-.78-.6,9.8,9.8,0,0,0-.88-.68h0L115.61,1.07a8,8,0,0,0-8,0L11.34,56.49h0a6.52,6.52,0,0,0-.88.69,7.81,7.81,0,0,0-.79.6,8.15,8.15,0,0,0-.71.93c-.18.25-.4.46-.55.72a7.88,7.88,0,0,0-.51,1.24,6.46,6.46,0,0,0-.29.67,8.18,8.18,0,0,0-.28,2.1v329.7a8,8,0,0,0,4,6.95l192.5,110.84a8.83,8.83,0,0,0,1.33.54c.21.08.41.2.63.26a7.92,7.92,0,0,0,4.1,0c.2-.05.37-.16.55-.22a8.6,8.6,0,0,0,1.4-.58L404.4,400.09a8,8,0,0,0,4-6.95V287.88l92.24-53.11a8,8,0,0,0,4-7V117.92A8.63,8.63,0,0,0,504.4,115.83ZM111.6,17.28h0l80.19,46.15-80.2,46.18L31.41,63.44Zm88.25,60V278.6l-46.53,26.79-33.69,19.4V123.5l46.53-26.79Zm0,412.78L23.37,388.5V77.32L57.06,96.7l46.52,26.8V338.68a6.94,6.94,0,0,0,.12.9,8,8,0,0,0,.16,1.18h0a5.92,5.92,0,0,0,.38.9,6.38,6.38,0,0,0,.42,1v0a8.54,8.54,0,0,0,.6.78,7.62,7.62,0,0,0,.66.84l0,0c.23.22.52.38.77.58a8.93,8.93,0,0,0,.86.66l0,0,0,0,92.19,52.18Zm8-106.17-80.06-45.32,84.09-48.41,92.26-53.11,80.13,46.13-58.8,33.56Zm184.52,4.57L215.88,490.11V397.8L346.6,323.2l45.77-26.15Zm0-119.13L358.68,250l-46.53-26.79V131.79l33.69,19.4L392.37,178Zm8-105.28-80.2-46.17,80.2-46.16,80.18,46.15Zm8,105.28V178L455,151.19l33.68-19.4v91.39h0Z"></path></svg></span> <span class="text-sm font-medium">Requires Laravel</span>
                  </span>
                </aside>































              <h1 class="inline-block mb-2 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white" id="content">Tailwind CSS Laravel - Flowbite</h1>
              <p class="mb-4 text-lg text-gray-600 dark:text-gray-400">Learn how to install Tailwind CSS with Flowbite using Laravel Mix and start building modern websites with the most popular PHP framework in the world</p>
            </div>

            <div id="mainContent">

              <p>Laravel is the most popular PHP web framework based on the model-view-controller (MCV) model that helps you build modern web applications and API’s.</p>
  <p>Use the officially recommended Tailwind CSS utility-first framework and the UI components from Flowbite to enhance your front-end development process.</p>

  <h2 class="relative group">Install Tailwind CSS with Laravel
  <span id="install-tailwind-css-with-laravel" class="absolute -top-[140px]"></span> <a class="ml-2 text-blue-700 opacity-0 transition-opacity dark:text-blue-500 group-hover:opacity-100" href="#install-tailwind-css-with-laravel" aria-label="Link to this section: Install Tailwind CSS with Laravel">#</a></h2><p>Make sure that you have <a href="https://getcomposer.org/" rel="nofollow">Composer</a> and <a href="https://nodejs.org/en/" rel="nofollow">Node.js</a> installed locally on your computer.</p>
  <p>Follow the next steps to install Tailwind CSS and Flowbite with Laravel Mix.</p>
  <ol>
  <li>Require the Laravel Installer globally using Composer:</li>
  </ol>
  <div class="highlight"><pre class="chroma"><code class="language-bash" data-lang="bash">composer global require laravel/installer
  </code></pre></div><p>Make sure to place the vendor bin directory in your PATH. Here’s how you can do it based on each OS:</p>
  <ul>
  <li>macOS: <code>export PATH="$PATH:$HOME/.composer/vendor/bin"</code></li>
  <li>Windows: <code>set PATH=%PATH%;%USERPROFILE%\AppData\Roaming\Composer\vendor\bin</code></li>
  <li>Linux: <code>export PATH="~/.config/composer/vendor/bin:$PATH"</code></li>
  </ul>
  <ol start="2">
  <li>Create a new project using Laravel’s CLI:</li>
  </ol>
  <div class="highlight"><pre class="chroma"><code class="language-bash" data-lang="bash">laravel new awesome-project

  <span class="nb">cd</span> awesome-project
  </code></pre></div><p>Start the development server using the following command:</p>
  <div class="highlight"><pre class="chroma"><code class="language-bash" data-lang="bash">php artisan serve
  </code></pre></div><p>You can now access the Laravel application on <code>http://localhost:8000</code>.</p>
  <p>This command will initialize a blank Laravel project that you can get started with.</p>
  <ol start="4">
  <li>Install Tailwind CSS and Flowbite using NPM:</li>
  </ol>
  <div class="highlight"><pre class="chroma"><code class="language-javascript" data-lang="javascript"><span class="nx">npm</span> <span class="nx">install</span> <span class="o">-</span><span class="nx">D</span> <span class="nx">tailwindcss</span> <span class="nx">postcss</span> <span class="nx">autoprefixer</span> <span class="nx">flowbite</span>
  </code></pre></div><ol start="5">
  <li>Create a Tailwind CSS config file:</li>
  </ol>
  <div class="highlight"><pre class="chroma"><code class="language-bash" data-lang="bash">npx tailwindcss init -p
  </code></pre></div><p>A new <code>tailwind.config.js</code> file will be created inside your root folder.</p>
  <ol start="6">
  <li>Add the view paths and require Flowbite as a plugin inside <code>tailwind.config.js</code>:</li>
  </ol>
  <div class="highlight"><pre class="chroma"><code class="language-javascript" data-lang="javascript"><span class="nx">module</span><span class="p">.</span><span class="nx">exports</span> <span class="o">=</span> <span class="p">{</span>
      <span class="nx">content</span><span class="o">:</span> <span class="p">[</span>
        <span class="s2">"./resources/**/*.blade.php"</span><span class="p">,</span>
        <span class="s2">"./resources/**/*.js"</span><span class="p">,</span>
        <span class="s2">"./resources/**/*.vue"</span><span class="p">,</span>
        <span class="s2">"./node_modules/flowbite/**/*.js"</span>
      <span class="p">],</span>
      <span class="nx">theme</span><span class="o">:</span> <span class="p">{</span>
        <span class="nx">extend</span><span class="o">:</span> <span class="p">{},</span>
      <span class="p">},</span>
      <span class="nx">plugins</span><span class="o">:</span> <span class="p">[</span>
          <span class="nx">require</span><span class="p">(</span><span class="s1">'flowbite/plugin'</span><span class="p">)</span>
      <span class="p">],</span>
    <span class="p">}</span>
  </code></pre></div><p>This will tell the compiler from Tailwind what files to look for to properly apply the classes inside the final CSS file and it will also install the extra plugin options from Flowbite.</p>
  <ol start="7">
  <li>Add the directives inside the <code>./resources/css/app.css</code> file:</li>
  </ol>
  <div class="highlight"><pre class="chroma"><code class="language-css" data-lang="css"><span class="p">@</span><span class="k">tailwind</span> <span class="nt">base</span><span class="p">;</span>
  <span class="p">@</span><span class="k">tailwind</span> <span class="nt">components</span><span class="p">;</span>
  <span class="p">@</span><span class="k">tailwind</span> <span class="nt">utilities</span><span class="p">;</span>
  </code></pre></div><ol start="8">
  <li>Make sure your compiled CSS and JS is included in the <code>&lt;head&gt;</code> then start using Tailwind’s utility classes to style your content.</li>
  </ol>
  <div class="highlight"><pre class="chroma"><code class="language-javascript" data-lang="javascript"><span class="err">@</span><span class="nx">vite</span><span class="p">([</span><span class="s1">'resources/css/app.css'</span><span class="p">,</span><span class="s1">'resources/js/app.js'</span><span class="p">])</span>
  </code></pre></div><ol start="9">
  <li>Import the Flowbite JavaScript package inside the <code>./resources/js/app.js</code> file to enable the interactive components such as modals, dropdowns, navbars, and more.</li>
  </ol>
  <div class="highlight"><pre class="chroma"><code class="language-javascript" data-lang="javascript"><span class="kr">import</span> <span class="s1">'flowbite'</span><span class="p">;</span>
  </code></pre></div><p>Alternatively, you can also include the JavaScript file using CDN:</p>
  <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">script</span> <span class="na">src</span><span class="o">=</span><span class="s">"https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"</span><span class="p">&gt;&lt;/</span><span class="nt">script</span><span class="p">&gt;</span>
  </code></pre></div><p>Now that you’ve set everything up start up a local development server using <code>php artisan serve</code> and run the build process for Vite by using <code>npm run dev</code> or build it for production using <code>npm run build</code>.</p>

  <h2 class="relative group">Flowbite components
  <span id="flowbite-components" class="absolute -top-[140px]"></span> <a class="ml-2 text-blue-700 opacity-0 transition-opacity dark:text-blue-500 group-hover:opacity-100" href="#flowbite-components" aria-label="Link to this section: Flowbite components">#</a></h2><p>Now that you have successfully installed the project you can start using the UI components from Flowbite and Tailwind CSS to develop modern websites and web applications.</p>
  <p>We recommend exploring the components using the search bar navigation (<code>cmd</code> or <code>ctrl</code> + <code>k</code>) or by browsing the components section of the sidebar on the left side of this page.</p>
  <!-- ## Boilerplate Github Repository

  Download or clone the Flowbite Laravel Github boilerplate repository to get access to a project that already has Laravel, Tailwind CSS, and Flowbite set up for development.

  ```bash
  git clone ...
  ``` --><blockquote>
  </blockquote>


              <aside class="flex mt-6 mb-8 font-medium leading-6" aria-label="Previous and next page navigation">

                  <a class="flex items-center justify-center mr-8 text-gray-500 transition-colors duration-200 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" href="https://flowbite.com/docs/getting-started/qwik/"><svg class="w-3.5 h-3.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"></path>
                  </svg>Qwik</a>


                <a class="flex items-center justify-center ml-auto text-right text-gray-500 transition-colors duration-200 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" href="https://flowbite.com/docs/getting-started/symfony/">Symfony<svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"></path>
                </svg></a>

              </aside>

              <aside class="p-4 my-8 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700" aria-label="Subscribe to the Flowbite newsletter">
                <h3 class="mb-3 text-xl font-medium text-gray-900 dark:text-white">Get more updates...</h3>
                <p class="mb-5 text-sm font-medium text-gray-500 dark:text-gray-300">Do you want to get notified when a new component is added to Flowbite? Sign up for our newsletter and you'll be among the first to find out about new features, components, versions, and tools.</p>
                <script src="../../../../f.convertkit.com/ckjs/ck.5.html"></script>
                <form action="https://app.convertkit.com/forms/4692392/subscriptions" class="seva-form formkit-form" method="post" data-sv-form="4692392" data-uid="344e3b5c48" data-format="inline" data-version="5" data-options="{&quot;settings&quot;:{&quot;after_subscribe&quot;:{&quot;action&quot;:&quot;message&quot;,&quot;success_message&quot;:&quot;Success! Now check your email to confirm your subscription.&quot;,&quot;redirect_url&quot;:&quot;&quot;},&quot;analytics&quot;:{&quot;google&quot;:null,&quot;fathom&quot;:null,&quot;facebook&quot;:null,&quot;segment&quot;:null,&quot;pinterest&quot;:null,&quot;sparkloop&quot;:null,&quot;googletagmanager&quot;:null},&quot;modal&quot;:{&quot;trigger&quot;:&quot;timer&quot;,&quot;scroll_percentage&quot;:null,&quot;timer&quot;:5,&quot;devices&quot;:&quot;all&quot;,&quot;show_once_every&quot;:15},&quot;powered_by&quot;:{&quot;show&quot;:true,&quot;url&quot;:&quot;https://convertkit.com/features/forms?utm_campaign=poweredby&amp;utm_content=form&amp;utm_medium=referral&amp;utm_source=dynamic&quot;},&quot;recaptcha&quot;:{&quot;enabled&quot;:false},&quot;return_visitor&quot;:{&quot;action&quot;:&quot;show&quot;,&quot;custom_content&quot;:&quot;&quot;},&quot;slide_in&quot;:{&quot;display_in&quot;:&quot;bottom_right&quot;,&quot;trigger&quot;:&quot;timer&quot;,&quot;scroll_percentage&quot;:null,&quot;timer&quot;:5,&quot;devices&quot;:&quot;all&quot;,&quot;show_once_every&quot;:15},&quot;sticky_bar&quot;:{&quot;display_in&quot;:&quot;top&quot;,&quot;trigger&quot;:&quot;timer&quot;,&quot;scroll_percentage&quot;:null,&quot;timer&quot;:5,&quot;devices&quot;:&quot;all&quot;,&quot;show_once_every&quot;:15}},&quot;version&quot;:&quot;5&quot;}" min-width="400 500 600 700 800">
                    <div data-style="clean" class="flex items-end mb-3">
                        <ul class="formkit-alert formkit-alert-error" data-element="errors" data-group="alert"></ul>
                        <div data-element="fields" data-stacked="false" class="flex items-center w-full max-w-md mb-3 seva-fields formkit-fields">
                            <div class="relative w-full mr-3 formkit-field">
                                <label for="member_email" class="hidden block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email address</label>
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                  <svg class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                    <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"></path>
                                    <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"></path>
                                  </svg>
                                </div>
                                <input id="member_email" class="formkit-input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="email_address" aria-label="Email Address" placeholder="Your email address..." required="" type="email">
                            </div>
                            <button data-element="submit" class="formkit-submit">
                                <div class="formkit-spinner">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <span class="px-5 py-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg cursor-pointer hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Subscribe</span>
                            </button>
                        </div>
                    </div>
                </form>
                <div class="text-sm font-medium text-gray-500 dark:text-gray-300">By subscribing, you agree with ConvertKit's <a rel="nofollow" href="https://convertkit.com/terms" class="text-blue-600 hover:underline dark:text-blue-500">Terms of Service</a> and <a rel="nofollow" class="text-blue-600 hover:underline dark:text-blue-500" href="https://convertkit.com/privacy">Privacy Policy</a>.</div>
              </aside>

            </div>
          </div>


          <div class="flex-none hidden w-64 pl-8 mr-8 xl:text-sm xl:block">

            <div class="flex overflow-y-auto sticky top-28 flex-col justify-between pt-10 pb-6 h-[calc(100vh-5rem)]">
              <div class="mb-8">
                <h4 class="pl-2.5 mb-2 text-sm font-semibold tracking-wide text-gray-900 uppercase dark:text-white lg:text-xs">On this page</h4>
                <nav id="TableOfContents">
    <ul>
      <li><a href="#install-tailwind-css-with-laravel" class="!border-blue-700 !after:opacity-100 !text-blue-700 dark:!border-blue-500 dark:!text-blue-500">Install Tailwind CSS with Laravel</a></li>
      <li><a href="#flowbite-components" class="">Flowbite components</a></li>
    </ul>
  </nav>

                <aside class="w-52 mt-6 mx-auto border-t border-gray-200 dark:border-gray-700 pt-8">
                  <a href="https://www.enhanceui.com/?ref=flowbite-sidebar" class="block rounded-lg" rel="nofollow noopener noreferrer" target="_blank">
                    <img src="https://flowbite.com/docs/images/book-light.svg" class="shadow mb-3 w-36 dark:hidden" alt="Enhance UI book cover light mode">
                    <img src="https://flowbite.com/docs/images/book-dark.svg" class="shadow mb-3 w-36 hidden dark:block" alt="Enhance UI book cover dark mode">
                    <h4 class="text-base font-semibold text-gray-900 mb-1.5 dark:text-white">Learn Design Concepts</h4>
                    <p class="text-gray-500 dark:text-gray-400">Make better Flowbite pages by learning the fundamentals of design</p>
                    <div class="border-t border-gray-200 dark:border-gray-700 pt-2 mt-2">
                      <h5 class="font-medium text-gray-900 dark:text-white">Teach Me Design</h5>
                      <p class="text-gray-500 dark:text-gray-400">by Adrian Twarog</p>
                    </div>
                  </a>
                </aside>
              </div>
            </div>

          </div>
        </div>

      </main>

    </div>
  </div> --}}

@endsection
