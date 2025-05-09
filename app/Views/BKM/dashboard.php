<?= $this->extend('template') ?>

<?= $this->section('breadcrumb') ?>
<h6 class="mb-0 font-bold text-white capitalize">Dashbor Mesjid Al-Ikhlas 24 November 2024</h6>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- cards -->
<div class="w-full px-6 py-6 mx-auto">
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
        <!-- card1 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-4/12">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm leading-normal uppercase dark:text-white text-blue-500 dark:opacity-60">Dana Mesjid</p>
                                <h5 class="mb-2 font-bold dark:text-white">RP6.000.000.000</h5>
                                <p class="mb-0 dark:text-white dark:opacity-60 text-sm">
                                    <span class="text-sm font-bold leading-normal text-emerald-500">+3.48%</span>
                                    Dibandingkan bulan sebelumnya
                                </p>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card2 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-4/12">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm leading-normal uppercase dark:text-white text-emerald-500 dark:opacity-60">Pemasukan Mesjid</p>
                                <h5 class="mb-2 font-bold dark:text-white">Rp275.000</h5>
                                <p class="mb-0 dark:text-white dark:opacity-60">
                                    <span class="text-sm font-bold leading-normal text-emerald-500">+5.77%</span>
                                    Dibandingkan bulan sebelumnya
                                </p>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3 flex justify-end">
                            <div class="flex items-center justify-center w-12 h-12 rounded-full bg-gradient-to-tl from-emerald-500 to-teal-400">
                                <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M12 14a3 3 0 0 1 3-3h4a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-4a3 3 0 0 1-3-3Zm3-1a1 1 0 1 0 0 2h4v-2h-4Z" clip-rule="evenodd" />
                                    <path fill-rule="evenodd" d="M12.293 3.293a1 1 0 0 1 1.414 0L16.414 6h-2.828l-1.293-1.293a1 1 0 0 1 0-1.414ZM12.414 6 9.707 3.293a1 1 0 0 0-1.414 0L5.586 6h6.828ZM4.586 7l-.056.055A2 2 0 0 0 3 9v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2h-4a5 5 0 0 1 0-10h4a2 2 0 0 0-1.53-1.945L17.414 7H4.586Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card3 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-4/12">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm leading-normal uppercase dark:text-white text-red-600 dark:opacity-60">Pengeluaran Mesjid</p>
                                <h5 class="mb-2 font-bold dark:text-white">Rp186.283</h5>
                                <p class="mb-0 dark:text-white dark:opacity-60">
                                    <span class="text-sm font-bold leading-normal text-red-600">-3.48%</span>
                                    Dibandingkan bulan sebelumnya
                                </p>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-red-600 to-orange-600">
                                <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- cards row 2 -->
    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 lg:w-8/12 lg:flex-none">
            <div class="border-black/12.5 dark:bg-slate-850 dark:shadow-dark-xl shadow-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid p-6 pt-4 pb-0">
                    <h6 class="capitalize font-bold dark:text-white">Grafik Pemasukan dan Pengeluaran <span class="text-sm font-bold leading-normal text-blue-500">(06.00 WIB - 21.00)</span></h6>
                </div>
                <div class="flex-auto p-4">
                    <div id="chart" class="h-full"></div>
                </div>
            </div>
        </div>

        <div class="w-full max-w-full px-3 mt-0 lg:w-4/12 lg:flex-none">
            <div class="border-black/12.5 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="antialiased sans-serif bg-gray-100 h-auto">
                    <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
                        <div class="container mx-auto px-4 py-4 md:py-12">
                            <div class="bg-white rounded-lg shadow overflow-hidden">
                                <div class="flex items-center justify-between py-2 px-2">
                                    <div>
                                        <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800 mb-2"></span>
                                        <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                                    </div>
                                    <div class="border rounded-lg px-1 flex items-center">
                                        <button type="button" class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 items-center"
                                            :class="{'cursor-not-allowed opacity-25': month == 0 }" :disabled="month == 0 ? true : false"
                                            @click="month--; getNoOfDays()">
                                            <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                            </svg>
                                        </button>
                                        <button type="button" class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex items-center cursor-pointer hover:bg-gray-200 p-1"
                                            :class="{'cursor-not-allowed opacity-25': month == 11 }" :disabled="month == 11 ? true : false"
                                            @click="month++; getNoOfDays()">
                                            <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="-mx-1 -mb-1">
                                    <div class="flex flex-wrap mb-2">
                                        <template x-for="(day, index) in DAYS" :key="index">
                                            <div class="px-2 py-1 text-center" style="width: 14.26%">
                                                <div x-text="day" class="text-gray-600 text-xs uppercase tracking-wide font-bold"></div>
                                            </div>
                                        </template>
                                    </div>

                                    <div class="flex flex-wrap border-t border-l">
                                        <template x-for="blankday in blankdays">
                                            <div class="text-center border-r border-b px-4 pt-2" style="width: 14.28%; height: 55px"></div>
                                        </template>
                                        <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                            <div style="width: 14.28%; height: 55px" class="px-4 pt-2 border-r border-b relative">
                                                <div @click="showEventModal(date)" x-text="date"
                                                    class="inline-flex w-8 h-8 items-center justify-center cursor-pointer text-center leading-none rounded-full transition ease-in-out duration-100"
                                                    :class="{'bg-blue-500 text-white': isToday(date), 'text-gray-700 hover:bg-blue-200': !isToday(date) }"></div>
                                                <div class="overflow-y-auto mt-1" style="height: 60px;">
                                                    <template x-for="event in events.filter(e => new Date(e.event_date).toDateString() ===  new Date(year, month, date).toDateString() )">
                                                        <div class="px-2 py-1 rounded-lg mt-1 overflow-hidden border"
                                                            :class="{
                                                'border-blue-200 text-blue-800 bg-blue-100': event.event_theme === 'blue',
                                                'border-red-200 text-red-800 bg-red-100': event.event_theme === 'red',
                                                'border-yellow-200 text-yellow-800 bg-yellow-100': event.event_theme === 'yellow',
                                                'border-green-200 text-green-800 bg-green-100': event.event_theme === 'green',
                                                'border-purple-200 text-purple-800 bg-purple-100': event.event_theme === 'purple'
                                            }">
                                                            <p x-text="event.event_title" class="text-sm truncate leading-tight"></p>
                                                        </div>
                                                    </template>
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- cards row 3 -->

    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-8/12 lg:flex-none">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl dark:bg-gray-950 border-black-125 rounded-2xl bg-clip-border">
                <div class="p-4 pb-0 mb-0 rounded-t-4">
                    <div class="flex justify-between">
                        <h6 class="mb-2 font-bold dark:text-white">Aktivitas Terbaru</h6>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="items-center w-full mb-4 align-top border-collapse border-gray-200 dark:border-white/40">
                        <tbody>
                            <tr class="bg-gray-200">
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40 w-[fit-content]">
                                    <div class="flex items-center px-2 py-4">
                                        <div class="px-3 text-right">
                                            <div class="inline-block w-4 h-4 text-center rounded-circle bg-blue-500">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <h6 class="mb-1 text-sm leading-normal dark:text-white">Bukti pembayaran sedekah terbaru dari Dian Atika Sukma Nasution</h6>
                                    <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-60">5 menit yang lalu</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40 w-[fit-content]">
                                    <div class="flex items-center px-2 py-4">
                                        <div class="px-3 text-right">
                                            <div class="inline-block w-4 h-4 text-center rounded-circle bg-gray-600">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <h6 class="mb-1 text-sm leading-normal dark:text-white">Pendaftaran lomba MTQ Tingkat Remaja dari Fatimah Annisa</h6>
                                    <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-60">9 menit yang lalu</p>
                                </td>
                            </tr>
                            <tr class="bg-gray-200 my-5">
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40 w-[fit-content]">
                                    <div class="flex items-center px-2 py-4">
                                        <div class="px-3 text-right">
                                            <div class="inline-block w-4 h-4 text-center rounded-circle bg-blue-500">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40 w-[fit-content]">
                                    <h6 class="mb-1 text-sm leading-normal dark:text-white">Bukti pembayaran sedekah terbaru dari Amelia Rahma</h6>
                                    <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-60">15 menit yang lalu</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="w-full max-w-full px-3 mt-0 lg:w-4/12 lg:flex-none">
            <div class="border-black/12.5 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="p-4 pb-0 rounded-t-4">
                    <h6 class="mb-0 font-bold dark:text-white">Sedekah Pending</h6>
                </div>
                <div class="flex-auto p-4">
                    <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                        <li class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit">
                            <div class="flex items-center">
                                <div class="px-3 text-right">
                                    <div class="inline-block w-4 h-4 text-center rounded-circle bg-blue-500">
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <h6 class="mb-1 text-xs leading-normal text-slate-700 dark:text-white"> <span class="font-bold">Bukti pembayaran sedekah</span> <br> terbaru dari Dian Atika Sukma Nasution</h6>
                                    <span class="text-xs leading-tight dark:text-white/80">5 menit yang lalu</span>
                                </div>
                            </div>
                        </li>
                        <li class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-xl text-inherit">
                            <div class="flex items-center">
                                <div class="px-3 text-right">
                                    <div class="inline-block w-4 h-4 text-center rounded-circle bg-blue-500">
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <h6 class="mb-1 text-xs leading-normal text-slate-700 dark:text-white"><span class="font-bold">Bukti pembayaran sedekah</span> <br> terbaru dari Amelia Rahmah</h6>
                                    <span class="text-xs leading-tight dark:text-white/80">15 menit yang lalu</span>
                                </div>
                            </div>
                        </li>
                        <li class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-b-lg rounded-xl text-inherit">
                            <div class="flex items-center">
                                <div class="px-3 text-right">
                                    <div class="inline-block w-4 h-4 text-center rounded-circle bg-blue-500">
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <h6 class="mb-1 text-xs leading-normal text-slate-700 dark:text-white"><span class="font-bold">Bukti pembayaran sedekah</span> <br> terbaru dari Ade Flower</h6>
                                    <span class="text-xs leading-tight dark:text-white/80">22 menit yang lalu</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- footer-->
    <?= $this->include('layout/footer') ?>
    <!-- end footer-->
</div>
<!-- end cards -->
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    var options = {
        chart: {
            type: 'bar',
            height: 300,
            stacked: false,
            toolbar: {
                show: false
            }
        },
        series: [{
                name: 'Pemasukan',
                data: [100000, 20000, 30000, 40000, 50000, 60000, 100000, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                color: '#3B82F6' // blue-500
            },
            {
                name: 'Pengeluaran',
                data: [100000, 20000, 30000, 40000, 50000, 0, 0, 700000, 0, 0, 0, 0, 300000, 0, 0, 0],
                color: '#FBBF24' // yellow-500
            }
        ],
        xaxis: {
            categories: ['06.00', '07.00', '08.00', '09.00', '10.00', '11.00', '12.00', '13.00', '14.00', '15.00', '16.00', '17.00', '18.00', '19.00', '20.00', '21.00'],
            title: {
                text: ""
            }
        },
        yaxis: {
            labels: {
                formatter: function(val) {
                    return val.toFixed(0);
                }
            }
        },
        dataLabels: {
            enabled: false
        },
        legend: {
            position: 'bottom'
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script>
<script>
    const MONTH_NAMES = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    const DAYS = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

    function app() {
        return {
            month: '',
            year: '',
            no_of_days: [],
            blankdays: [],
            days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],

            events: [{
                    event_date: new Date(2020, 3, 1),
                    event_title: "April Fool's Day",
                    event_theme: 'blue'
                },

                {
                    event_date: new Date(2020, 3, 10),
                    event_title: "Birthday",
                    event_theme: 'red'
                },

                {
                    event_date: new Date(2020, 3, 16),
                    event_title: "Upcoming Event",
                    event_theme: 'green'
                }
            ],
            event_title: '',
            event_date: '',
            event_theme: 'blue',

            themes: [{
                    value: "blue",
                    label: "Blue Theme"
                },
                {
                    value: "red",
                    label: "Red Theme"
                },
                {
                    value: "yellow",
                    label: "Yellow Theme"
                },
                {
                    value: "green",
                    label: "Green Theme"
                },
                {
                    value: "purple",
                    label: "Purple Theme"
                }
            ],

            openEventModal: false,

            initDate() {
                let today = new Date();
                this.month = today.getMonth();
                this.year = today.getFullYear();
                this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
            },

            isToday(date) {
                const today = new Date();
                const d = new Date(this.year, this.month, date);

                return today.toDateString() === d.toDateString() ? true : false;
            },

            showEventModal(date) {
                // open the modal
                this.openEventModal = true;
                this.event_date = new Date(this.year, this.month, date).toDateString();
            },

            addEvent() {
                if (this.event_title == '') {
                    return;
                }

                this.events.push({
                    event_date: this.event_date,
                    event_title: this.event_title,
                    event_theme: this.event_theme
                });

                console.log(this.events);

                // clear the form data
                this.event_title = '';
                this.event_date = '';
                this.event_theme = 'blue';

                //close the modal
                this.openEventModal = false;
            },

            getNoOfDays() {
                let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

                // find where to start calendar day of week
                let dayOfWeek = new Date(this.year, this.month).getDay();
                let blankdaysArray = [];
                for (var i = 1; i <= dayOfWeek; i++) {
                    blankdaysArray.push(i);
                }

                let daysArray = [];
                for (var i = 1; i <= daysInMonth; i++) {
                    daysArray.push(i);
                }

                this.blankdays = blankdaysArray;
                this.no_of_days = daysArray;
            }
        }
    }
</script>
<?= $this->endSection() ?>