@vite('resources/css/app.css')

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<div class="min-w-screen relative flex min-h-screen flex-col items-center justify-center bg-cream-dark pt-4"
	x-data="{ open: true }">
	<div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
		x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
		x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
		x-description="Background backdrop, show/hide based on modal state."
		class="fixed inset-0 bg-gray-600 bg-opacity-75 transition-opacity"></div>


	<div class="fixed overflow-y-auto">
		<div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

			<div x-show="open" x-transition:enter="ease-out duration-300"
				x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
				x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
				x-transition:leave="ease-in duration-200"
				x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
				x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
				x-description="Modal panel, show/hide based on modal state."
				class="relative transform overflow-hidden rounded-lg bg-cream-dark text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg"
				@click.away="open = false">
				<div class="p-4 sm:p-10 text-center overflow-y-auto">
					<!-- Icon -->
					<div class="flex  justify-center">
					<img src="img/centang.png" alt="Bloodwave" class="w-auto h-20">
					</div>

					<!-- End Icon -->

					<h3 class="mb-2 text-2xl font-bold text-red-dark">
						Data Berhasil Disimpan
					</h3>
					

					<div class="mt-6 flex justify-center gap-x-4">
						<a class="py-2.5 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-cream-medium text-red-dark shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm"
							href="javascript:;">
							Kembali Ke Halaman Riwayat
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>