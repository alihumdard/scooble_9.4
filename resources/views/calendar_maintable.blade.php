@extends('layouts.main')

@section('main-section')
<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper py-0 px-3">
		<div style="border: none;">
			<div class="bg-white" style="border-radius: 20px;">
				<div class="p-3">
					<div class="row mb-3">
						<div class="col-lg-6">
							<h3 class="page-title">
								<span class="page-title-icon bg-gradient-primary text-white me-2 py-2">
									<svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M13.4109 0.76862L13.4119 1.51824C16.1665 1.73414 17.9862 3.6112 17.9891 6.48975L18 14.9155C18.0039 18.054 16.0322 19.985 12.8718 19.99L5.15189 20C2.0112 20.004 0.0148232 18.027 0.0108739 14.8796L1.32771e-05 6.55272C-0.00393603 3.65517 1.75153 1.78311 4.50618 1.53024L4.50519 0.780614C4.5042 0.340834 4.83002 0.00999952 5.26445 0.00999952C5.69887 0.00900002 6.02469 0.338835 6.02568 0.778615L6.02666 1.47826L11.8914 1.47027L11.8904 0.770619C11.8894 0.330839 12.2152 0.00100402 12.6497 4.52073e-06C13.0742 -0.000994979 13.4099 0.32884 13.4109 0.76862ZM1.52149 6.86157L16.4696 6.84158V6.49175C16.4272 4.34283 15.349 3.21539 13.4139 3.04748L13.4148 3.81709C13.4148 4.24688 13.0801 4.58771 12.6556 4.58771C12.2212 4.58871 11.8944 4.24888 11.8944 3.81909L11.8934 3.0095L6.02864 3.01749L6.02962 3.82609C6.02962 4.25687 5.70479 4.5967 5.27037 4.5967C4.83595 4.5977 4.50914 4.25887 4.50914 3.82809L4.50815 3.05847C2.58286 3.25138 1.51754 4.38281 1.5205 6.55072L1.52149 6.86157ZM12.2399 11.4043V11.4153C12.2498 11.8751 12.625 12.2239 13.0801 12.2139C13.5244 12.2029 13.8789 11.8221 13.869 11.3623C13.8483 10.9225 13.4918 10.5637 13.0485 10.5647C12.5944 10.5747 12.2389 10.9445 12.2399 11.4043ZM13.0554 15.892C12.6013 15.882 12.235 15.5032 12.234 15.0435C12.2241 14.5837 12.5884 14.2029 13.0426 14.1919H13.0525C13.5165 14.1919 13.8927 14.5707 13.8927 15.0405C13.8937 15.5102 13.5185 15.891 13.0554 15.892ZM8.17213 11.4203C8.19187 11.8801 8.56804 12.2389 9.02221 12.2189C9.46651 12.1979 9.82096 11.8181 9.80122 11.3583C9.79036 10.9085 9.42505 10.5587 8.98075 10.5597C8.52658 10.5797 8.17114 10.9605 8.17213 11.4203ZM9.02617 15.8471C8.57199 15.8671 8.19681 15.5082 8.17608 15.0485C8.17608 14.5887 8.53053 14.2089 8.9847 14.1879C9.429 14.1869 9.79529 14.5367 9.80517 14.9855C9.8259 15.4463 9.47046 15.8261 9.02617 15.8471ZM4.10434 11.4553C4.12408 11.915 4.50025 12.2749 4.95442 12.2539C5.39872 12.2339 5.75317 11.8531 5.73244 11.3933C5.72257 10.9435 5.35725 10.5937 4.91197 10.5947C4.4578 10.6147 4.10335 10.9955 4.10434 11.4553ZM4.95837 15.8521C4.5042 15.8731 4.12902 15.5132 4.10828 15.0535C4.1073 14.5937 4.46274 14.2129 4.91691 14.1929C5.3612 14.1919 5.7275 14.5417 5.73738 14.9915C5.75811 15.4513 5.40366 15.8321 4.95837 15.8521Z" fill="white" />
									</svg>
								</span> Calendar
							</h3>
						</div>
						<div class="col-lg-6 text-right">
							<h3>
								<a href="/calender">
									<svg width="26" height="30" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M19.2487 1.92213L19.2501 2.98409C23.1526 3.28994 25.7304 5.94911 25.7346 10.0271L25.75 21.9636C25.7556 26.4097 22.9623 29.1453 18.4851 29.1524L7.5485 29.1666C3.09919 29.1722 0.27099 26.3715 0.265395 21.9126L0.250009 10.1163C0.244415 6.01141 2.73133 3.35932 6.63374 3.00109L6.63234 1.93912C6.63094 1.3161 7.09252 0.847415 7.70796 0.847415C8.32339 0.845999 8.78496 1.31326 8.78636 1.93629L8.78776 2.92746L17.0961 2.91613L17.0947 1.92496C17.0933 1.30194 17.5549 0.834671 18.1703 0.833255C18.7718 0.831839 19.2474 1.29911 19.2487 1.92213ZM2.40543 10.5538L23.582 10.5255V10.0299C23.5218 6.98559 21.9944 5.38839 19.2529 5.15051L19.2543 6.2408C19.2543 6.84966 18.7802 7.3325 18.1787 7.3325C17.5633 7.33392 17.1003 6.85249 17.1003 6.24363L17.0989 5.0967L8.79056 5.10803L8.79196 6.25354C8.79196 6.86382 8.33178 7.34524 7.71635 7.34524C7.10092 7.34666 6.63794 6.86665 6.63794 6.25637L6.63654 5.16609C3.90905 5.43937 2.39984 7.04223 2.40403 10.1134L2.40543 10.5538ZM17.5899 16.9893V17.0049C17.6039 17.6562 18.1354 18.1504 18.7802 18.1363C19.4096 18.1207 19.9117 17.5812 19.8978 16.9299C19.8684 16.3068 19.3634 15.7985 18.7354 15.7999C18.092 15.8141 17.5885 16.338 17.5899 16.9893ZM18.7452 23.347C18.1018 23.3328 17.5829 22.7962 17.5815 22.1448C17.5675 21.4935 18.0836 20.954 18.727 20.9384H18.741C19.3984 20.9384 19.9313 21.4751 19.9313 22.1406C19.9327 22.8061 19.4012 23.3456 18.7452 23.347ZM11.8272 17.012C11.8551 17.6633 12.3881 18.1717 13.0315 18.1433C13.6609 18.1136 14.163 17.5755 14.1351 16.9242C14.1197 16.287 13.6021 15.7914 12.9727 15.7928C12.3293 15.8212 11.8258 16.3606 11.8272 17.012ZM13.0371 23.2833C12.3937 23.3116 11.8621 22.8033 11.8328 22.1519C11.8328 21.5006 12.3349 20.9625 12.9783 20.9328C13.6077 20.9314 14.1267 21.4269 14.1406 22.0627C14.17 22.7155 13.6665 23.2535 13.0371 23.2833ZM6.06447 17.0615C6.09244 17.7129 6.62535 18.2226 7.26876 18.1929C7.89818 18.1646 8.40032 17.6251 8.37095 16.9738C8.35696 16.3366 7.83944 15.841 7.20862 15.8424C6.56521 15.8707 6.06307 16.4102 6.06447 17.0615ZM7.27436 23.2903C6.63095 23.3201 6.09944 22.8103 6.07006 22.159C6.06866 21.5077 6.5722 20.9682 7.21561 20.9399C7.84503 20.9384 8.36396 21.434 8.37794 22.0712C8.40732 22.7225 7.90518 23.262 7.27436 23.2903Z" fill="#323C47" />
									</svg>
								</a>
							</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4"></div>
						<div class="col-lg-8">
							<div class="row mx-1">
								<div class="col-lg-4 px-1" style="text-align: right;">
									<button class="btn btn-sm text-white" style="background-color: #E45F00; border-radius: 8px;"><i class="fa fa-plus"></i> @lang('lang.create-trip')</button>
								</div>
								<div class="col-lg-4 px-1">
									<select name="filter_by_sts" id="filter_by_sts" class="form-select" style="border-radius: 10px;">
										<option value="">
											<svg width="11" height="15" viewBox="0 0 11 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M7.56221 14.0648C7.58971 14.3147 7.52097 14.5814 7.36287 14.7563C7.29927 14.8336 7.22373 14.8949 7.14058 14.9367C7.05742 14.9785 6.96827 15 6.87825 15C6.78822 15 6.69907 14.9785 6.61592 14.9367C6.53276 14.8949 6.45722 14.8336 6.39363 14.7563L3.63713 11.4151C3.56216 11.3263 3.50516 11.2176 3.47057 11.0977C3.43599 10.9777 3.42477 10.8496 3.43779 10.7235V6.45746L0.145116 1.34982C0.0334875 1.17612 -0.0168817 0.955919 0.005015 0.737342C0.0269117 0.518764 0.119294 0.319579 0.261975 0.183308C0.392582 0.0666576 0.536937 0 0.688166 0H10.3118C10.4631 0 10.6074 0.0666576 10.738 0.183308C10.8807 0.319579 10.9731 0.518764 10.995 0.737342C11.0169 0.955919 10.9665 1.17612 10.8549 1.34982L7.56221 6.45746V14.0648ZM2.09047 1.66644L4.81259 5.88254V10.4819L6.1874 12.1484V5.8742L8.90953 1.66644H2.09047Z" fill="#323C47" />
											</svg> @lang('lang.filter_by_status')
										</option>
									</select>
								</div>
								<div class="col-lg-4 px-1">
									<select name="sort_by" id="sort_by" class="form-select" style="border-radius: 10px;">
										<option value="">
											<svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M13.6752 0.558058C13.4311 0.313981 13.0354 0.313981 12.7913 0.558058L8.81386 4.53553C8.56978 4.77961 8.56978 5.17534 8.81386 5.41942C9.05794 5.6635 9.45366 5.6635 9.69774 5.41942L13.2333 1.88388L16.7688 5.41942C17.0129 5.6635 17.4086 5.6635 17.6527 5.41942C17.8968 5.17534 17.8968 4.77961 17.6527 4.53553L13.6752 0.558058ZM12.6083 14C12.6083 14.3452 12.8881 14.625 13.2333 14.625C13.5785 14.625 13.8583 14.3452 13.8583 14H12.6083ZM12.6083 1V14H13.8583V1H12.6083Z" fill="#323C47" />
												<path d="M5.625 1C5.625 0.654822 5.34518 0.375 5 0.375C4.65482 0.375 4.375 0.654822 4.375 1H5.625ZM4.55806 14.4419C4.80214 14.686 5.19786 14.686 5.44194 14.4419L9.41942 10.4645C9.6635 10.2204 9.6635 9.82466 9.41942 9.58058C9.17534 9.3365 8.77961 9.3365 8.53553 9.58058L5 13.1161L1.46447 9.58058C1.22039 9.3365 0.82466 9.3365 0.580583 9.58058C0.336505 9.82466 0.336505 10.2204 0.580583 10.4645L4.55806 14.4419ZM4.375 1V14H5.625V1H4.375Z" fill="#323C47" />
											</svg> Sort by
										</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="px-2">
						<div class="table-responsive">
							@include('calendar_table')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- content-wrapper ends -->

@endsection