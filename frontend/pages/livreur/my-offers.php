<?php 

include __DIR__ . '/../../../src/Database/DatabaseConnection.php';
include __DIR__ . '/../../../src/Repository/UtilisateurRepository.php';
include __DIR__ . '/../../../src/Service/UtilisateurService.php';
session_start();    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trouver des livraisons | Deliverix</title>
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
<div class="w-12 h-12 border-4 border-[#16a34a] rounded-2xl flex items-center justify-center bg-white shadow-xl shadow-green-100 transform -rotate-3 hover:rotate-0 transition-transform duration-300">
    <span class="text-[#064e3b] font-extrabold text-2xl tracking-tighter">Dx</span>
</div>
                <span class="text-xl font-black text-[#064e3b]">Deliverix <span class="text-xs font-medium text-green-600 ml-1">Pro</span></span>
            </div>
            <div class="flex items-center gap-6">
                <a href="my-offers.php" class="text-sm font-bold text-slate-600 hover:text-green-600 transition">Mes Offres</a>
                <a href="orders.php" class="text-sm font-bold text-slate-600 hover:text-green-600 transition">Commandes Disponibles </a>

            <div class="flex items-center gap-6">
                <span class="font-medium"><strong><?php echo (strtoupper($_SESSION['user']['name'])); ?></strong></span>
                <a href="/views/auth/logout.php" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg font-bold transition-all">Déconnexion</a>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto p-6 md:p-10">
        <div class="mb-10">
            <h1 class="text-3xl font-black text-[#064e3b]">Commandes disponibles</h1>
            <p class="text-slate-500 font-medium">Consultez les demandes et proposez vos tarifs.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 ">
            
            <div class="bg-white rounded-[2.5rem] p-8 border border-green-50 shadow-sm hover:shadow-xl transition-all group">
                <div class="flex justify-between items-start mb-6">
                    <div class="p-4 bg-green-50 rounded-2xl text-green-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    </div>
                    <div class="text-right">
                        <span class="inline-block px-3 py-1 bg-blue-50 text-blue-600 text-[10px] font-black uppercase rounded-full">5 offres déjà reçues</span>
                    </div>
                </div>

                <div class="mb-8">
                    <h2 class="text-2xl font-extrabold text-slate-800 mb-2">Canapé d'angle (Lourd)</h2>
                    <div class="flex flex-col gap-2 text-sm text-slate-500">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-red-400 rounded-full"></span>
                            <span>Départ: <strong>Paris (75010)</strong></span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                            <span>Arrivée: <strong>Lille (59000)</strong></span>
                        </div>
                    </div>
                </div>

                <form action="make-offer.php" method="POST" class="bg-slate-50 p-6 rounded-[2rem] border border-slate-100">
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-[10px] font-black text-slate-400 uppercase mb-1 ml-2">Prix (€)</label>
                            <input type="number" placeholder="0.00" class="w-full px-4 py-3 rounded-xl border-none focus:ring-2 focus:ring-green-500 font-bold">
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-slate-400 uppercase mb-1 ml-2">Durée (h)</label>
                            <input type="number" placeholder="Ex: 3" class="w-full px-4 py-3 rounded-xl border-none focus:ring-2 focus:ring-green-500 font-bold">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-[10px] font-black text-slate-400 uppercase mb-1 ml-2">Véhicule</label>
                        <select class="w-full px-4 py-3 rounded-xl border-none focus:ring-2 focus:ring-green-500 font-bold text-slate-700 bg-white">
                            <option>Utilitaire (Camionnette)</option>
                            <option>Voiture Berline</option>
                            <option>Moto / Scooter</option>
                            <option>Vélo / Cargo</option>
                        </select>
                    </div>

                    <div class="flex flex-wrap gap-2 mb-6">
                        <label class="flex items-center gap-2 bg-white px-3 py-2 rounded-lg cursor-pointer hover:bg-green-50 transition">
                            <input type="checkbox" class="accent-green-500">
                            <span class="text-xs font-bold text-slate-600">Express</span>
                        </label>
                        <label class="flex items-center gap-2 bg-white px-3 py-2 rounded-lg cursor-pointer hover:bg-green-50 transition">
                            <input type="checkbox" class="accent-green-500">
                            <span class="text-xs font-bold text-slate-600">Fragile</span>
                        </label>
                        <label class="flex items-center gap-2 bg-white px-3 py-2 rounded-lg cursor-pointer hover:bg-green-50 transition">
                            <input type="checkbox" class="accent-green-500">
                            <span class="text-xs font-bold text-slate-600">Main d'œuvre</span>
                        </label>
                    </div>

                    <button class="w-full py-4 bg-[#22c55e] hover:bg-[#16a34a] text-white rounded-2xl font-bold shadow-lg shadow-green-100 transition-all transform active:scale-95 href="make-offer.php">
                        Envoyer ma proposition
                    </button>
                </form>
            </div>

            <div class="bg-white rounded-[2.5rem] p-8 border border-green-50 shadow-sm opacity-60 pointer-events-none italic flex items-center justify-center">
                <p class="text-slate-400 font-bold">D'autres commandes arrivent bientôt...</p>
             </div>

        </div>
    </main>

    <footer class="mt-20 py-10 text-center border-t border-green-50">
        <p class="text-slate-400 text-sm font-medium">Interface sécurisée Deliverix pour Livreurs Partenaires.</p>
    </footer>

</body>
</html>