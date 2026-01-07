<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle Commande | Deliverix</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/frontend/styles/style.css">

    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-slate-50">

    <header class="bg-white border-b border-green-100 px-6 py-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="orders.html" class="flex items-center gap-2">
<div class="w-12 h-12 border-4 border-[#16a34a] rounded-2xl flex items-center justify-center bg-white shadow-xl shadow-green-100 transform -rotate-3 hover:rotate-0 transition-transform duration-300">
    <span class="text-[#064e3b] font-extrabold text-2xl tracking-tighter">Dx</span>
</div>                <span class="text-xl font-black text-[#064e3b]">Deliverix</span>
            </a>
            <div class="h-10 w-10 rounded-xl bg-green-100 border border-green-200"></div>
        </div>
    </header>

    <main class="max-w-3xl mx-auto p-6 md:p-12">
        <div class="bg-white rounded-[2.5rem] shadow-xl p-10 border border-green-50">
            <h2 class="text-3xl font-black text-[#064e3b] mb-8">Détails de l'envoi</h2>
            
            <form class="space-y-8" action="/views/client/create_order.php" method="post">
                <div class="space-y-4">
                    <label class="block text-lg font-bold text-slate-800">Qu'expédiez-vous ?</label>
                    <textarea rows="3" name="description" class="w-full px-6 py-4 rounded-2xl bg-green-50/10 border border-slate-200 focus:border-[#22c55e] outline-none transition-all" placeholder="Ex: Un colis de 5kg, fragile, dimensions 40x40..."></textarea>
                </div>

                <div class="grid grid-cols-1  gap-6">
                 
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-400 uppercase ml-2">Lieu de livraison</label>
                        <input name="adresse" type="text" placeholder="Adresse complète" class="w-full px-5 py-4 rounded-2xl border border-slate-200 focus:border-[#22c55e] outline-none">
                    </div>
                </div>


                <div class="flex gap-4 pt-4">
                    <a href="orders.php"><button type="button" class="flex-1 px-8 py-4 rounded-2xl font-bold text-slate-400 hover:bg-slate-50 transition">Annuler</button></a>
                    <button type="submit" class="flex-[2] bg-[#064e3b] text-white px-8 py-4 rounded-2xl font-bold shadow-2xl hover:bg-[#16a34a] transition-all">
                        Publier ma demande
                    </button>
                </div>
            </form>
        </div>
    </main>
    <script src="/frontend/assets/js/script.js"></script>
</body>
</html>