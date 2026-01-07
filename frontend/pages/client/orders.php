<?php 

session_start();

require_once __DIR__ . '/../../../src/Entity/commande.php'; // 1. L'objet
require_once __DIR__ . '/../../../src/Repository/CommandeRepository.php'; // 2. La base
require_once __DIR__ . '/../../../src/Service/CommandeService.php'; // 3. La logique
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client | Deliverix</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-900">

    <nav class="bg-white/80 backdrop-blur-md border-b border-green-100 sticky top-0 z-50 px-6 py-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-[#16a34a] rounded-lg flex items-center justify-center text-white font-black italic shadow-lg shadow-green-200">D</div>
                <span class="text-xl font-black text-[#064e3b]">Deliverix</span>
            </div>

            <div class="flex items-center gap-6">
                <span class="font-medium">Bonjour, <strong><?php echo (strtoupper($_SESSION['user']['name'])); ?></strong></span>
                <a href="/views/auth/logout.php" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg font-bold transition-all">Déconnexion</a>
        </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto p-6 md:p-10">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 mb-12">
            <div>
                <h1 class="text-4xl font-black text-[#064e3b]">Mes Commandes</h1>
                <p class="text-slate-500 font-medium">Suivez vos livraisons Deliverix en temps réel.</p>
            </div>
            <a href="create-order.php" class="bg-[#22c55e] hover:bg-[#16a34a] text-white px-8 py-4 rounded-2xl font-bold shadow-xl shadow-green-100 transition-all transform hover:-translate-y-1">
                + Nouvelle commande
            </a>
        </div>

        <div class="flex gap-3 mb-8 overflow-x-auto pb-2">
            <span class="px-4 py-2 bg-green-600 text-white rounded-xl text-sm font-bold cursor-pointer">Toutes</span>
            <span class="px-4 py-2 bg-white border border-green-100 text-slate-600 rounded-xl text-sm font-bold hover:bg-green-50 cursor-pointer transition">En cours</span>
            <span class="px-4 py-2 bg-white border border-green-100 text-slate-600 rounded-xl text-sm font-bold hover:bg-green-50 cursor-pointer transition">Terminées</span>
        </div>

        <div class="grid gap-6 ">
            
        <?php 
        $commandeService = new CommandeService(null, null, null, null, null, $_SESSION['user']['id']);
        $orders = $commandeService->listAllCommandes();
        foreach ($orders as $order) {
            echo '
             <div class="bg-white p-6 rounded-[2rem] border border-green-50 shadow-sm hover:shadow-md transition-shadow group">
                <div class="flex flex-wrap justify-between items-center gap-4">
                    <div class="flex gap-5">
                        <div class="w-14 h-14 bg-green-50 rounded-2xl flex items-center justify-center text-[#16a34a]">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        
                        <div class="">
                            <h3 class="text-lg font-bold text-slate-800">'.$order['description'].'</h3>
                            <p class="text-sm text-slate-500 italic">Destination : '.$order['adresse'].' • <span class="text-[#16a34a] font-bold">15.00€</span></p>
                            <div class="flex items-center gap-2 mt-2">
                                <span class="px-3 py-1 bg-amber-100 text-amber-600 text-[10px] font-black uppercase rounded-full">Attente doffres</span>
                                <span class="text-slate-400 text-[10px] font-medium">Il y a 2 heures</span>
                            </div>
                        </div>
                    </div>';}?>

                    <div class="flex gap-2">
                        <a href="view-offers.php"><button class="px-6 py-3 bg-slate-900 text-white rounded-xl font-bold text-sm hover:bg-slate-800 transition transform active:scale-95">
                            Voir les offres (3)
                        </button></a>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-[2rem] border border-green-50 shadow-sm hover:shadow-md transition-shadow group">
                <div class="flex flex-wrap justify-between items-center gap-4">
                    <div class="flex gap-5">
                        <div class="w-14 h-14 bg-green-50 rounded-2xl flex items-center justify-center text-[#16a34a]">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        
                        <div class="">
                            <h3 class="text-lg font-bold text-slate-800">Ordinateur Portable HP</h3>
                            <p class="text-sm text-slate-500 italic">Destination : Paris 11ème • <span class="text-[#16a34a] font-bold">15.00€</span></p>
                            <div class="flex items-center gap-2 mt-2">
                                <span class="px-3 py-1 bg-amber-100 text-amber-600 text-[10px] font-black uppercase rounded-full">Attente d'offres</span>
                                <span class="text-slate-400 text-[10px] font-medium">Il y a 2 heures</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex gap-2">
                        <a href="view-offers.php"><button class="px-6 py-3 bg-slate-900 text-white rounded-xl font-bold text-sm hover:bg-slate-800 transition transform active:scale-95">
                            Voir les offres (3)
                        </button></a>
                    </div>
                </div>
            </div>
            

            <div class="bg-white p-6 rounded-[2rem] border border-green-50 shadow-sm opacity-80">
                <div class="flex flex-wrap justify-between items-center gap-4">
                    <div class="flex gap-5">
                        <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-slate-400">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-400">Panier Bio - Famille</h3>
                            <p class="text-sm text-slate-400 italic">Livré à : Bordeaux Centre</p>
                            <span class="inline-block mt-2 px-3 py-1 bg-slate-100 text-slate-500 text-[10px] font-black uppercase rounded-full">Livré</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <footer class="mt-20 py-10 border-t border-green-50 text-center">
        <p class="text-slate-400 text-sm font-medium">© 2026 Deliverix. Livraison éco-responsable.</p>
    </footer>

</body>
</html>