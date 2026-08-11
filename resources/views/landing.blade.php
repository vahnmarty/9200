<title>{{ __('Welcome') }} - {{ config('app.name', 'Laravel') }}</title>

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">

@fonts

@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex justify-center items-center">
    <div
        class="flex flex-col gap-y-8 w-96"
        x-data="{
            progress: 0,
            redirecting: false,

            init() {
                // Fast loading: 0% → 90%
                const duration = 1400;
                const start = performance.now();

                const animateTo90 = (now) => {
                    const elapsed = now - start;

                    this.progress = Math.min(
                        (elapsed / duration) * 90,
                        90
                    );

                    if (this.progress < 90) {
                        requestAnimationFrame(animateTo90);
                    }
                };

                requestAnimationFrame(animateTo90);
            },

            finishLoading() {
                if (this.redirecting || this.progress < 90) {
                    return;
                }

                this.redirecting = true;

                const duration = 1000;
                const start = performance.now();

                const animateTo100 = (now) => {
                    const elapsed = now - start;

                    this.progress = Math.min(
                        90 + (elapsed / duration) * 10,
                        100
                    );

                    if (this.progress < 100) {
                        requestAnimationFrame(animateTo100);
                    } else {
                        // Small delay after reaching 100%
                        setTimeout(() => {
                            window.location.href = '{{ url('/index') }}';
                        }, 1000);
                    }
                };

                requestAnimationFrame(animateTo100);
            }
        }"
    >
        <img
            src="{{ asset('img/logo_white.png') }}"
            class="lg:w-48 h-auto mx-auto"
        >

        <div>
            <!-- Label -->
            <div class="flex justify-between text-xs text-red-700 font-mono mb-1 uppercase tracking-widest">
                <span x-text="progress < 100 ? 'Loading...' : 'Complete!'"></span>
                <span x-text="Math.round(progress) + '%'"></span>
            </div>

            <!-- Bar Track -->
            <div class="h-6 w-full bg-gray-950 border-2 border-gray-800 p-0.5 relative overflow-hidden">
                <!-- Bar Fill -->
                <div
                    class="h-full bg-red-500 shadow-[inset_0_2px_0_rgba(255,255,255,0.4)]"
                    :style="{ width: progress + '%' }"
                ></div>
            </div>

            <div class="relative h-10">
                <div
                    class="absolute bottom-0 leading-none origin-bottom"
                    :style="{
                        left: progress + '%',
                        transform: `
                            translateX(-50%)
                            scale(${1 + Math.pow(progress / 100, 4) * 1.7})
                        `
                    }"
                >
                    🔥
                </div>
            </div>
        </div>

        <!-- Button -->
            <div id="cta"  class="mt-0 flex justify-center flex-col items-center gap-y-6">
                <p :class="{ 'invisible': progress < 90 }">Always raising the bar. From <em>Ninety</em> to <strong>Hundred</strong>. </p>
                <button
                    type="button"
                    @click="finishLoading()"
                    :disabled="redirecting || progress < 90"
                    class="rounded-none border-2 border-black bg-red-700 w-48 mx-auto px-6 py-3 font-mono font-extrabold uppercase shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] transition-all hover:translate-x-[2px] hover:translate-y-[2px] hover:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] active:translate-x-[4px] active:translate-y-[4px] active:shadow-none text-center text-white disabled:opacity-50 disabled:cursor-not-allowed"
                >
                    <span x-text="redirecting ? 'Starting...' : 'Side out!'"></span>
                </button>
                </div>
        </div>
    </body>
</html>
