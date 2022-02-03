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
                            <h2 class="text-2xl font-semibold leading-tight">Users</h2>
                        </div>
                        <form class="my-2 flex sm:flex-row flex-col">
                            <div class="flex flex-row mb-1 sm:mb-0">
                                <div class="relative">
                                    <select
                                        name="field"
                                        class="appearance-none h-full rounded-l border block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        <option <?=@$_GET["field"]=="nama"?"selected":""?> value="nama">Nama</option>
                                        <option <?=@$_GET["field"]=="nip"?"selected":""?> value="nip">NIP</option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="block relative">
                                <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                                    <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                        <path
                                            d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                                        </path>
                                    </svg>
                                </span>
                                <input 
                                    name="keyword"
                                    value="<?=@$_GET["keyword"]?>"
                                    placeholder="Search"
                                    class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
                            </div>
                            <div class="relative">
                                <button type="submit" class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-black uppercase transition rounded shadow ripple hover:shadow-lg hover:bg-gray-200 focus:outline-none waves-effect bg-white">
                                    Cari
                                </button>
                            </div>
                            <div class="flex-1">
                                <a href="<?=base_url("index.php/aplikasi/form")?>" class="float-right inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-black rounded shadow ripple waves-light hover:shadow-lg focus:outline-none hover:bg-black waves-effect">
                                    Tambah
                                </a>
                            </div>
                            
                        </form>    
            <div class="w-full">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Nama</th>
                                <th class="py-3 px-6 text-left">NIM</th>
                                <th class="py-3 px-6 text-center">FILE</th>
                                <th class="py-3 px-6 text-center">Dibuat</th>
                                <th class="py-3 px-6 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <?php
                            if(isset($_GET["field"])){
                                $this->db->like($_GET["field"], $_GET["keyword"]);
                            }
                            
                            foreach($this->db->get("uploads")->result() as $row){
                            ?>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <?=$row->nama?>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <?=$row->nip?>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <?php
                                    if($row->file==""){
                                        ?>
                                        Tidak tersedia
                                        <?php
                                    }else{
                                        ?>
                                        <a href="<?=base_url("uploads/".$row->file)?>" target="_blank" class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">Buka</a>
                                        <?php
                                    }
                                    ?>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <?=$row->dibuat?>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        
                                        <a href="<?=base_url("index.php/aplikasi/form/".$row->id)?>" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </a>
                                        <a href="<?=base_url("index.php/aplikasi/hapus/".$row->id)?>" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        
    
                        <!-- content -->
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>