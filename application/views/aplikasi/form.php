<!-- Dark mode not enabled -->
<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<main class="bg-gray-100 dark:bg-gray-800 rounded-2xl relative h-screen overflow-hidden relative">
    <div class="flex items-start justify-between">
        <div class="h-screen hidden lg:block my-4 ml-4 shadow-lg relative w-80">
            <div class="bg-white h-full rounded-2xl dark:bg-gray-700">
                <div class="flex items-center justify-center pt-6">
                    <svg width="35" height="30" viewBox="0 0 256 366" version="1.1" preserveAspectRatio="xMidYMid">
                        <defs>
                            <linearGradient x1="12.5189534%" y1="85.2128611%" x2="88.2282959%" y2="10.0225497%" id="linearGradient-1">
                                <stop stop-color="#FF0057" stop-opacity="0.16" offset="0%">
                                </stop>
                                <stop stop-color="#FF0057" offset="86.1354%">
                                </stop>
                            </linearGradient>
                        </defs>
                        <g>
                            <path d="M0,60.8538006 C0,27.245261 27.245304,0 60.8542121,0 L117.027019,0 L255.996549,0 L255.996549,86.5999776 C255.996549,103.404155 242.374096,117.027222 225.569919,117.027222 L145.80812,117.027222 C130.003299,117.277829 117.242615,130.060011 117.027019,145.872817 L117.027019,335.28252 C117.027019,352.087312 103.404567,365.709764 86.5997749,365.709764 L0,365.709764 L0,117.027222 L0,60.8538006 Z" fill="#001B38">
                            </path>
                            <circle fill="url(#linearGradient-1)" transform="translate(147.013244, 147.014675) rotate(90.000000) translate(-147.013244, -147.014675) " cx="147.013244" cy="147.014675" r="78.9933938">
                            </circle>
                            <circle fill="url(#linearGradient-1)" opacity="0.5" transform="translate(147.013244, 147.014675) rotate(90.000000) translate(-147.013244, -147.014675) " cx="147.013244" cy="147.014675" r="78.9933938">
                            </circle>
                        </g>
                    </svg>
                </div>
                <nav class="mt-6">
                    <div>
                        <a class="w-full font-thin uppercase text-blue-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white to-blue-100 border-r-4 border-blue-500 dark:from-gray-700 dark:to-gray-800 border-r-4 border-blue-500" href="#">
                            <span class="text-left">
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                                    </path>
                                </svg>
                            </span>
                            <span class="mx-4 text-sm font-normal">
                                Dashboard
                            </span>
                        </a>
                        
                    </div>
                </nav>
            </div>
        </div>
        <div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
            
                <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
                    <div class="flex flex-col">
                        <!-- content -->
        
                        <div>
                            <h2 class="text-2xl font-semibold leading-tight">Form Upload</h2>
                        </div>
                        <div class="leading-loose">
                            <form action="<?=base_url("index.php/aplikasi/simpan")?>" class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" method="post" enctype="multipart/form-data">
                                
                                <div class="">
                                    <label class="block text-sm text-gray-00" for="cus_name">Nama</label>
                                    <input value="<?=@$detail->nama?>" aria-label="Name" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="nama" placeholder="Nama" required="" type="text">
                                </div>
                                <div class="mt-2">
                                    <label class="block text-sm text-gray-00" for="cus_name">NIP</label> 
                                    <input value="<?=@$detail->nip?>" aria-label="Name" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="nip" placeholder="NIP" required="" type="text">
                                </div>
                                <div class="mt-2">
                                    <label class=" block text-sm text-gray-600" for="cus_email">File</label>
                                    <input value="<?=@$detail->file?>" type="hidden" name="file_sebelumnya"/>
                                    <input value="<?=@$detail->id?>" type="hidden" name="id"/>
                                    <input type="file" name="file"/>
                                    
                                </div>
                                
                                <div class="mt-4 flex-1 text-right">
                                    <button class="justify-right px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Simpan</button>
                                </div>
                            </form>
                        </div>
    
                        <!-- content -->
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>