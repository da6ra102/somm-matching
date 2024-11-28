<?php
function vite_asset(string $path): mixed
{
    $host = 'http://localhost:5173';
    $manifestPath = __DIR__ . '/dist/manifest.json';

    if (is_resource(@fsockopen('localhost', 5173))) {
        return $host . '/' . $path;
    }

    if (file_exists($manifestPath)) {
        $manifest = json_decode(file_get_contents($manifestPath), true);
        return '/dist/' . $manifest[$path]['file'];
    }

    return $path;
}

?>

<script type="module" src="<?= vite_asset('frontend/js/app.js') ?>"></script>

<div class="flex items-start gap-10 font-secondary">
    <div class="flex border border-zinc-200 rounded-lg items-center flex-col p-14 w-[520px] gap-14">
        <div class="items-start grid grid-cols-3 relative w-full">
            <div class="flex flex-col gap-2 justify-center items-center relative">
                <div
                    class="border-2 cursor-pointer w-[14px] h-[14px] border-primary rounded-full bg-white flex justify-center items-center">
                    <div class="w-[6px] h-[6px] bg-primary rounded-full"></div>
                </div>

                <div class="absolute -z-[10] top-[6px] bg-primary/30 h-[1px] w-full left-1/2"></div>

                <span class="font-light text-sm font-secondary leading-relaxed">Personality</span>
            </div>

            <div class="flex flex-col gap-2 justify-center items-center relative">
                <div
                    class="border-2 cursor-pointer w-[14px] h-[14px] border-primary/30 rounded-full bg-white flex justify-center items-center">
                    <div class="w-[6px] h-[6px] bg-primary/30 rounded-full"></div>
                </div>

                <div class="absolute -z-[10] top-[6px] bg-primary/30 h-[1px] w-full left-1/2"></div>

                <span class="font-light text-sm font-secondary leading-relaxed">Food part</span>
            </div>


            <div class="flex flex-col gap-2 justify-center items-center">
                <div
                    class="border-2 cursor-pointer w-[14px] h-[14px] border-primary/30 rounded-full bg-white flex justify-center items-center">
                    <div class="w-[6px] h-[6px] bg-primary/30 rounded-full"></div>
                </div>

                <span class="font-light text-sm font-secondary leading-relaxed">Identity</span>
            </div>
        </div>


        <div class="flex flex-col items-center gap-2">
            <svg width="64" height="64" viewBox="0 0 65 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M49.8333 53.992V42.6667C49.8333 42.6667 43.1667 38.6667 32.5 38.6667C21.8333 38.6667 15.1667 42.6667 15.1667 42.6667V53.992M4.5 32C4.5 16.536 17.036 4 32.5 4C47.964 4 60.5 16.536 60.5 32C60.5 47.464 47.964 60 32.5 60C17.036 60 4.5 47.464 4.5 32ZM32.3027 33.3333C32.3027 33.3333 23.1667 28.48 23.1667 21.3333C23.1667 16.1787 27.3507 12 32.5107 12C33.7359 11.9996 34.9492 12.2409 36.0812 12.7099C37.2131 13.179 38.2414 13.8666 39.1073 14.7335C39.9732 15.6004 40.6597 16.6295 41.1275 17.762C41.5952 18.8945 41.8351 20.1081 41.8333 21.3333C41.8333 28.48 32.6973 33.3333 32.6973 33.3333H32.3027Z"
                    stroke="#5A6451" stroke-width="2" />
            </svg>

            <h2 class="font-primary text-[2rem] my-0 leading-[100%]">Questionaire</h2>
            <span class="text-sm font-secondary ">Fill out your profile to complete the sign up process</span>
        </div>

        <button
            class="w-fit px-4 transition-all hover:bg-primary-dark py-2.5 gap-3 flex items-center justify-center bg-primary rounded-[4px]">
            <span class="text-white font-bold">Start</span>
            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 4.25C12 4.8065 12.5498 5.6375 13.1063 6.335C13.8218 7.235 14.6767 8.02025 15.657 8.6195C16.392 9.06875 17.283 9.5 18 9.5M18 9.5C17.283 9.5 16.3912 9.93125 15.657 10.3805C14.6767 10.9805 13.8218 11.7657 13.1063 12.6642C12.5498 13.3625 12 14.195 12 14.75M18 9.5H0"
                    stroke="white" />
            </svg>

        </button>
    </div>


    <div class="flex border border-zinc-200 rounded-lg items-center flex-col p-14 w-[550px] gap-14">
        <div class="items-start grid grid-cols-3 relative w-full">
            <div class="flex flex-col gap-2 justify-center items-center relative">
                <div
                    class="border-2 cursor-pointer w-[14px] h-[14px] border-primary rounded-full bg-white flex justify-center items-center">
                    <div class="w-[6px] h-[6px] bg-primary rounded-full"></div>
                </div>

                <div class="absolute -z-[10] top-[6px] bg-primary/30 h-[1px] w-full left-1/2"></div>

                <span class="font-light text-sm font-secondary leading-relaxed">Personality</span>
            </div>

            <div class="flex flex-col gap-2 justify-center items-center relative">
                <div
                    class="border-2 cursor-pointer w-[14px] h-[14px] border-primary/30 rounded-full bg-white flex justify-center items-center">
                    <div class="w-[6px] h-[6px] bg-primary/30 rounded-full"></div>
                </div>

                <div class="absolute -z-[10] top-[6px] bg-primary/30 h-[1px] w-full left-1/2"></div>

                <span class="font-light text-sm font-secondary leading-relaxed">Food part</span>
            </div>


            <div class="flex flex-col gap-2 justify-center items-center">
                <div
                    class="border-2 cursor-pointer w-[14px] h-[14px] border-primary/30 rounded-full bg-white flex justify-center items-center">
                    <div class="w-[6px] h-[6px] bg-primary/30 rounded-full"></div>
                </div>

                <span class="font-light text-sm font-secondary leading-relaxed">Identity</span>
            </div>
        </div>


        <div class="flex flex-col items-center gap-2 w-full">
            <h2 class="font-primary text-[20px] my-0 leading-[100%]">How do you typically form your opinions?</h2>
            <span class="text-xs uppercase text-zinc-500 font-bold font-secondary ">Choose one answer</span>

            <div class="grid grid-cols-2 gap-4 items-center mt-4">
                <div
                    class="cursor-pointer w-full border border-primary/40 bg-primary/15 text-black rounded-md flex py-3 px-4 items-center gap-3">
                    <div class="w-3 h-3 min-w-3.5 min-h-3.5 bg-primary rounded-[4px] border border-primary"></div>
                    <span class="text-sm font-black text-primary">Logic and Facts</span>
                </div>

                <div
                    class="cursor-pointer w-full border bg-primary/15 text-black rounded-md flex py-3 px-4 items-center gap-3">
                    <div class="w-3 h-3 min-w-3.5 min-h-3.5 rounded-[4px] border border-primary"></div>
                    <span class="text-sm font-black text-primary">Emotions and Feelings</span>
                </div>
            </div>

        </div>


        <div class="flex flex-col items-center gap-2 w-full">
            <h2 class="font-primary text-[20px] my-0 leading-[100%]">Do you enjoy politically incorrect humor?</h2>
            <span class="text-xs uppercase text-zinc-500 font-bold font-secondary ">Choose one answer</span>

            <div class="flex flex-col items-center w-full justify-center mt-4">
                <div
                    class="w-full cursor-pointer  border border-primary/40 bg-primary/15 text-black rounded-t-md flex py-3 px-4 items-center gap-3">
                    <div class="w-3 h-3 min-w-3.5 min-h-3.5 bg-primary rounded-[4px] border border-primary"></div>
                    <span class="text-sm font-black text-primary">Strongly agree</span>
                </div>

                <div
                    class="w-full cursor-pointer  border bg-primary/15 text-black rounded-md flex py-3 px-4 items-center gap-3">
                    <div class="w-3 h-3 min-w-3.5 min-h-3.5 rounded-[4px] border border-primary"></div>
                    <span class="text-sm font-black text-primary">Agree</span>
                </div>

                <div
                    class="w-full cursor-pointer  border bg-primary/15 text-black rounded-md flex py-3 px-4 items-center gap-3">
                    <div class="w-3 h-3 min-w-3.5 min-h-3.5 rounded-[4px] border border-primary"></div>
                    <span class="text-sm font-black text-primary">Neutral</span>
                </div>

                <div
                    class="w-full cursor-pointer  border bg-primary/15 text-black rounded-md flex py-3 px-4 items-center gap-3">
                    <div class="w-3 h-3 min-w-3.5 min-h-3.5 rounded-[4px] border border-primary"></div>
                    <span class="text-sm font-black text-primary">Disagree</span>
                </div>

                <div
                    class="w-full cursor-pointer  border bg-primary/15 text-black rounded-md rounded-b-md flex py-3 px-4 items-center gap-3">
                    <div class="w-3 h-3 min-w-3.5 min-h-3.5 rounded-[4px] border border-primary"></div>
                    <span class="text-sm font-black text-primary">Strongly disagree</span>
                </div>
            </div>

        </div>




        <div class="flex justify-between items-center w-full">
            <button
                class="w-fit px-4 transition-all hover:bg-primary/30 py-2.5 gap-3 flex items-center justify-center bg-primary/15 rounded-[4px] border border-primary">
                <svg class="rotate-180" width="18" height="19" viewBox="0 0 18 19" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 4.25C12 4.8065 12.5498 5.6375 13.1063 6.335C13.8218 7.235 14.6767 8.02025 15.657 8.6195C16.392 9.06875 17.283 9.5 18 9.5M18 9.5C17.283 9.5 16.3912 9.93125 15.657 10.3805C14.6767 10.9805 13.8218 11.7657 13.1063 12.6642C12.5498 13.3625 12 14.195 12 14.75M18 9.5H0"
                        stroke="rgb(90, 100, 81)" />
                </svg>
                <span class="text-primary font-bolds">Previous</span>


            </button>
            <button
                class="w-fit px-4 transition-all hover:bg-primary-dark py-2.5 gap-3 flex items-center justify-center bg-primary rounded-[4px]">
                <span class="text-white font-bold">Next</span>
                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 4.25C12 4.8065 12.5498 5.6375 13.1063 6.335C13.8218 7.235 14.6767 8.02025 15.657 8.6195C16.392 9.06875 17.283 9.5 18 9.5M18 9.5C17.283 9.5 16.3912 9.93125 15.657 10.3805C14.6767 10.9805 13.8218 11.7657 13.1063 12.6642C12.5498 13.3625 12 14.195 12 14.75M18 9.5H0"
                        stroke="white" />
                </svg>

            </button>
        </div>

    </div>


    <div class="flex border border-zinc-200 rounded-lg items-center flex-col p-14 w-[520px] gap-14">
        <div class="items-start grid grid-cols-3 relative w-full">
            <div class="flex flex-col gap-2 justify-center items-center relative">
                <div
                    class="border-2 cursor-pointer w-[14px] h-[14px] border-primary rounded-full bg-white flex justify-center items-center">
                    <div class="w-[6px] h-[6px] bg-primary rounded-full"></div>
                </div>

                <div class="absolute -z-[10] top-[6px] bg-primary/30 h-[1px] w-full left-1/2"></div>

                <span class="font-light text-sm font-secondary leading-relaxed">Personality</span>
            </div>

            <div class="flex flex-col gap-2 justify-center items-center relative">
                <div
                    class="border-2 cursor-pointer w-[14px] h-[14px] border-primary/30 rounded-full bg-white flex justify-center items-center">
                    <div class="w-[6px] h-[6px] bg-primary/30 rounded-full"></div>
                </div>

                <div class="absolute -z-[10] top-[6px] bg-primary/30 h-[1px] w-full left-1/2"></div>

                <span class="font-light text-sm font-secondary leading-relaxed">Food part</span>
            </div>


            <div class="flex flex-col gap-2 justify-center items-center">
                <div
                    class="border-2 cursor-pointer w-[14px] h-[14px] border-primary/30 rounded-full bg-white flex justify-center items-center">
                    <div class="w-[6px] h-[6px] bg-primary/30 rounded-full"></div>
                </div>

                <span class="font-light text-sm font-secondary leading-relaxed">Identity</span>
            </div>
        </div>


        <div class="flex flex-col items-center gap-2">
            <svg width="65" height="64" viewBox="0 0 65 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M4.5 24V56M49.8333 54.6667V54.24C49.8325 44.1825 53.3846 34.448 59.8627 26.7547L60.5 26V25.3334H36.5V16C36.5 13.5247 35.5167 11.1507 33.7663 9.40036C32.016 7.65002 29.642 6.66669 27.1667 6.66669H25.8333V13.3334C25.8333 16.516 24.5691 19.5682 22.3186 21.8186C20.0682 24.0691 17.0159 25.3334 13.8333 25.3334H12.5V54.6667H49.8333Z"
                    stroke="#5A6451" stroke-width="2" />
            </svg>

            <h2 class="font-primary text-[2rem] my-0 leading-[100%]">Thank you</h2>
            <span class="text-sm font-secondary ">Thank you for your answers. You’re now ready to create your
                account</span>
        </div>

        <button
            class="w-fit px-4 transition-all hover:bg-primary-dark py-2.5 gap-3 flex items-center justify-center bg-primary rounded-[4px]">
            <span class="text-white font-bold">Create my account</span>
            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 4.25C12 4.8065 12.5498 5.6375 13.1063 6.335C13.8218 7.235 14.6767 8.02025 15.657 8.6195C16.392 9.06875 17.283 9.5 18 9.5M18 9.5C17.283 9.5 16.3912 9.93125 15.657 10.3805C14.6767 10.9805 13.8218 11.7657 13.1063 12.6642C12.5498 13.3625 12 14.195 12 14.75M18 9.5H0"
                    stroke="white" />
            </svg>

        </button>
    </div>

</div>