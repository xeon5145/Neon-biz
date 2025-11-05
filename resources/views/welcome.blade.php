<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="NeonBiz - Modern HRMS solution for streamlined HR operations. Manage employees, payroll, benefits, and more with our comprehensive human resource management system.">
        <meta name="keywords" content="HRMS, HR management, payroll, employee management, human resources, SaaS">

        <title>NeonBiz - Modern HRMS Solution</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

                <!-- Add Tailwind CSS via CDN for styling -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                darkMode: 'class',
                theme: {
                    extend: {
                        colors: {
                            'blue': {
                                50: '#eff6ff',
                                500: '#3b82f6',
                                600: '#2563eb',
                                700: '#1d4ed8'
                            },
                            'emerald': {
                                400: '#34d399',
                                500: '#10b981',
                                600: '#059669'
                            }
                        }
                    }
                }
            }
        </script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /*! tailwindcss v4.0.14 | MIT License | https://tailwindcss.com */
            @layer theme{:root,:host{--font-sans:ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-blue-600:#2563eb;--color-blue-700:#1d4ed8;--color-emerald-500:#10b981;--color-emerald-600:#059669;--color-green-600:oklch(.627 .194 149.214);--color-gray-900:oklch(.21 .034 264.665);--color-zinc-50:oklch(.985 0 0);--color-zinc-200:oklch(.92 .004 286.32);--color-zinc-400:oklch(.705 .015 286.067);--color-zinc-500:oklch(.552 .016 285.938);--color-zinc-600:oklch(.442 .017 285.786);--color-zinc-700:oklch(.37 .013 285.805);--color-zinc-800:oklch(.274 .006 286.033);--color-zinc-900:oklch(.21 .006 285.885);--color-neutral-100:oklch(.97 0 0);--color-neutral-200:oklch(.922 0 0);--color-neutral-700:oklch(.371 0 0);--color-neutral-800:oklch(.269 0 0);--color-neutral-900:oklch(.205 0 0);--color-neutral-950:oklch(.145 0 0);--color-stone-800:oklch(.268 .007 34.298);--color-stone-950:oklch(.147 .004 49.25);--color-black:#000;--color-white:#fff;--spacing:.25rem;--container-sm:24rem;--container-md:28rem;--container-lg:32rem;--container-xl:48rem;--container-2xl:56rem;--container-4xl:56rem;--text-xs:.75rem;--text-xs--line-height:calc(1/.75);--text-sm:.875rem;--text-sm--line-height:calc(1.25/.875);--text-base:1rem;--text-base--line-height:1.5;--text-lg:1.125rem;--text-lg--line-height:calc(1.75/1.125);--text-xl:1.25rem;--text-xl--line-height:1.75;--text-2xl:1.5rem;--text-2xl--line-height:2;--text-3xl:1.875rem;--text-3xl--line-height:2.25;--text-4xl:2.25rem;--text-4xl--line-height:2.5;--text-5xl:3rem;--text-5xl--line-height:1;--font-weight-normal:400;--font-weight-medium:500;--font-weight-semibold:600;--font-weight-bold:700;--leading-tight:1.25;--leading-normal:1.5;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--radius-xl:.75rem;--aspect-video:16/9;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4,0,.2,1);--default-font-family:var(--font-sans);--default-font-feature-settings:var(--font-sans--font-feature-settings);--default-font-variation-settings:var(--font-sans--font-variation-settings);--default-mono-font-family:var(--font-mono);--default-mono-font-feature-settings:var(--font-mono--font-feature-settings);--default-mono-font-variation-settings:var(--font-mono--font-variation-settings)}}
        </style>
    </head>   
 <body class="bg-gradient-to-br from-slate-50 to-blue-50 dark:from-slate-900 dark:to-slate-800 text-slate-900 dark:text-slate-100 min-h-screen">
        <!-- Navigation with blur background -->
        <header class="fixed top-0 left-0 right-0 z-50 backdrop-blur-md bg-white/80 dark:bg-slate-900/80 border-b border-slate-200/50 dark:border-slate-700/50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <h1 class="text-2xl font-bold text-blue-600 dark:text-blue-400">
                                <span class="text-emerald-500">Neon</span>Biz
                            </h1>
                        </div>
                    </div>

                    <!-- Navigation Links -->
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="pt-16">
            <!-- Hero Section -->
            <section class="relative py-20 lg:py-32">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 dark:text-white mb-6">
                            Streamline Your 
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-emerald-500">
                                HR Operations
                            </span>
                            <br>with NeonBiz
                        </h1>
                        <p class="text-xl text-slate-600 dark:text-slate-300 mb-8 max-w-3xl mx-auto">
                            Modern HRMS solution that simplifies employee management, payroll processing, and HR workflows. 
                            Everything you need to manage your workforce efficiently in one powerful platform.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{ route('register') ?? '#' }}" 
                               class="inline-flex items-center px-8 py-4 border border-transparent text-lg font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200 shadow-lg hover:shadow-xl">
                                Start Free Trial
                                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#features" 
                               class="inline-flex items-center px-8 py-4 border border-slate-300 dark:border-slate-600 text-lg font-medium rounded-lg text-slate-700 dark:text-slate-300 bg-white dark:bg-slate-800 hover:bg-slate-50 dark:hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </section>  
          <!-- Features Section -->
            <section id="features" class="py-20 bg-white dark:bg-slate-800">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white mb-4">
                            Everything You Need for Modern HR Management
                        </h2>
                        <p class="text-xl text-slate-600 dark:text-slate-300 max-w-3xl mx-auto">
                            Comprehensive HRMS features designed to streamline your human resource operations and boost productivity.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Employee Management -->
                        <div class="bg-slate-50 dark:bg-slate-700 rounded-xl p-8 hover:shadow-lg transition-shadow duration-300">
                            <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-3">Employee Management</h3>
                            <p class="text-slate-600 dark:text-slate-300">
                                Complete employee profiles, onboarding workflows, and organizational directory management.
                            </p>
                        </div>

                        <!-- Payroll Processing -->
                        <div class="bg-slate-50 dark:bg-slate-700 rounded-xl p-8 hover:shadow-lg transition-shadow duration-300">
                            <div class="w-12 h-12 bg-emerald-100 dark:bg-emerald-900 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-3">Payroll Processing</h3>
                            <p class="text-slate-600 dark:text-slate-300">
                                Automated payroll calculations, tax compliance, and seamless payment processing.
                            </p>
                        </div>

                        <!-- Time Tracking -->
                        <div class="bg-slate-50 dark:bg-slate-700 rounded-xl p-8 hover:shadow-lg transition-shadow duration-300">
                            <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-3">Time Tracking</h3>
                            <p class="text-slate-600 dark:text-slate-300">
                                Digital clock-in/out, timesheet management, and attendance monitoring.
                            </p>
                        </div>

                        <!-- Benefits Administration -->
                        <div class="bg-slate-50 dark:bg-slate-700 rounded-xl p-8 hover:shadow-lg transition-shadow duration-300">
                            <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-3">Benefits Administration</h3>
                            <p class="text-slate-600 dark:text-slate-300">
                                Health insurance, retirement plans, and comprehensive benefits management.
                            </p>
                        </div>

                        <!-- Performance Management -->
                        <div class="bg-slate-50 dark:bg-slate-700 rounded-xl p-8 hover:shadow-lg transition-shadow duration-300">
                            <div class="w-12 h-12 bg-red-100 dark:bg-red-900 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-3">Performance Management</h3>
                            <p class="text-slate-600 dark:text-slate-300">
                                Employee reviews, goal tracking, and continuous feedback systems.
                            </p>
                        </div>

                        <!-- Reporting & Analytics -->
                        <div class="bg-slate-50 dark:bg-slate-700 rounded-xl p-8 hover:shadow-lg transition-shadow duration-300">
                            <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-3">Reporting & Analytics</h3>
                            <p class="text-slate-600 dark:text-slate-300">
                                Comprehensive HR metrics, compliance reports, and data-driven insights.
                            </p>
                        </div>
                    </div>
                </div>
            </section>         
   <!-- Benefits Section -->
            <section class="py-20 bg-slate-50 dark:bg-slate-900">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white mb-4">
                            Why Choose NeonBiz?
                        </h2>
                        <p class="text-xl text-slate-600 dark:text-slate-300 max-w-3xl mx-auto">
                            Transform your HR operations with our comprehensive solution designed for modern businesses.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div class="space-y-8">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 bg-emerald-100 dark:bg-emerald-900 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-emerald-600 dark:text-emerald-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">Reduce Administrative Overhead</h3>
                                    <p class="text-slate-600 dark:text-slate-300">Save up to 40% of HR administrative time with automated workflows and streamlined processes.</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">Stay Compliant</h3>
                                    <p class="text-slate-600 dark:text-slate-300">Automatic updates ensure you're always compliant with the latest labor laws and regulations.</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 bg-purple-100 dark:bg-purple-900 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-purple-600 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">Boost Employee Satisfaction</h3>
                                    <p class="text-slate-600 dark:text-slate-300">Self-service portals and transparent processes improve employee experience and engagement.</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 bg-orange-100 dark:bg-orange-900 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-orange-600 dark:text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">Scale with Your Business</h3>
                                    <p class="text-slate-600 dark:text-slate-300">From startups to enterprises, our platform grows with your organization's needs.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative">
                            <div class="bg-gradient-to-br from-blue-500 to-emerald-500 rounded-2xl p-8 text-white">
                                <div class="text-center">
                                    <div class="text-5xl font-bold mb-2">98%</div>
                                    <div class="text-xl mb-6">Customer Satisfaction</div>
                                    <div class="grid grid-cols-2 gap-6 text-center">
                                        <div>
                                            <div class="text-2xl font-bold">40%</div>
                                            <div class="text-sm opacity-90">Time Saved</div>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold">24/7</div>
                                            <div class="text-sm opacity-90">Support</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>        
    <!-- CTA Section -->
            <section class="py-20 bg-gradient-to-r from-blue-600 to-emerald-500">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                        Ready to Transform Your HR Operations?
                    </h2>
                    <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
                        Join thousands of companies already using NeonBiz to streamline their HR processes. 
                        Start your free trial today and see the difference.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('register') ?? '#' }}" 
                           class="inline-flex items-center px-8 py-4 border border-transparent text-lg font-medium rounded-lg text-blue-600 bg-white hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200 shadow-lg hover:shadow-xl">
                            Start Free Trial
                            <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="mailto:contact@neonbiz.com" 
                           class="inline-flex items-center px-8 py-4 border-2 border-white text-lg font-medium rounded-lg text-white bg-transparent hover:bg-white hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200">
                            Contact Sales
                        </a>
                    </div>
                    <div class="mt-8 text-blue-100">
                        <p class="text-sm">
                            ✓ 14-day free trial &nbsp;&nbsp; ✓ No credit card required &nbsp;&nbsp; ✓ Cancel anytime
                        </p>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="bg-slate-900 text-slate-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="col-span-1 md:col-span-2">
                        <div class="flex items-center mb-4">
                            <h3 class="text-2xl font-bold text-white">
                                <span class="text-emerald-400">Neon</span>Biz
                            </h3>
                        </div>
                        <p class="text-slate-400 mb-4 max-w-md">
                            Modern HRMS solution designed to streamline your human resource operations and boost productivity.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-slate-400 hover:text-white transition-colors duration-200">
                                <span class="sr-only">Twitter</span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                                </svg>
                            </a>
                            <a href="#" class="text-slate-400 hover:text-white transition-colors duration-200">
                                <span class="sr-only">LinkedIn</span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="text-white font-semibold mb-4">Product</h4>
                        <ul class="space-y-2">
                            <li><a href="#features" class="hover:text-white transition-colors duration-200">Features</a></li>
                            <li><a href="#" class="hover:text-white transition-colors duration-200">Pricing</a></li>
                            <li><a href="#" class="hover:text-white transition-colors duration-200">Security</a></li>
                            <li><a href="#" class="hover:text-white transition-colors duration-200">Integrations</a></li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="text-white font-semibold mb-4">Support</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="hover:text-white transition-colors duration-200">Help Center</a></li>
                            <li><a href="#" class="hover:text-white transition-colors duration-200">Contact Us</a></li>
                            <li><a href="#" class="hover:text-white transition-colors duration-200">API Docs</a></li>
                            <li><a href="#" class="hover:text-white transition-colors duration-200">Status</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="border-t border-slate-800 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                    <p class="text-slate-400 text-sm">
                        © 2024 NeonBiz. All rights reserved.
                    </p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="text-slate-400 hover:text-white text-sm transition-colors duration-200">Privacy Policy</a>
                        <a href="#" class="text-slate-400 hover:text-white text-sm transition-colors duration-200">Terms of Service</a>
                    </div>
                </div>
            </div>
        </footer>


    </body>
</html>
