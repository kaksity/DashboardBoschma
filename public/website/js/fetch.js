// to Fetch List of Drugs/MDS

const drugs = ["Tab Paracetamol 500mg","Tab Metronidazole","Tab Amoxicillin500mg","Tab Amoxicillin250mg","Inj Arthemeter","Tab Artemether/Lumefantrin 120/20mg x24","Tab Artemether/Lumefantrine 120/20mgx18","Tab Artemether/Lummefantrine 120/20mg x12","Tab Artemether/Lumefantrine 120/20mg x6","Inj Artesunate 60mg","Tab Albendazole 400mg","Tab Tab Pyremethamine/Sulfadoxine*3","Tab Misoprostol 200mcg","Tab Zinc 50mg","Tab Ascorbic Acid 5mg","Tab Omeprazole 20mg","Syr Paracetamol 125mg/5mls","Syr Vit C","Syr Ibuprofen","Susp Amoxicillin 125mg/5mls","Syr Metronidazole","Tab Chlorpheniramine 4mg","Syr Chlorpheniramine","Tab Metformin 500mg","Tab Cotrimoxazole 480mg","Tab Vit B Complex","Syr Vit B Complex","Tab Fluconazole 50mg","Susp Cotrimoxazole","Tab Amlodipine 10mg","Tab Folic Acid","Tabs Amoxicillin/Clavulanic Acid 625mg","Tab Tab Compound Mag Trisilicate 500mg","Tab Calcium Lactate 200mg","Tab Omeprazole 20mg","Inj Magnesium Sulphate","Inj Ceftriazone 1g","Inj Crystalline Penicillin 1000000 IU","Inj Oxytocin","Inj Ergometrine","Syr Paracetamol 125mg/5mls","Syr Vit C","Syr Ibuprofen","Susp Amoxicillin 125mg/5mls","Susp Amoxicillin/Clavulanic Acid 25+B426mg/5ml","Syr Metronidazole","Methylated Spirit","Hydrogen Peroxide","Inj xylocaine 2%","Inj Diazepam","Iodine","Whitfield ointment","Calamine Lotion","Methyl salicylate","Syr Vit B Complex","IV Giving set","Zinc Oxide Ointment","Salbutamol inhaler","Salbutamol tab 4mg","Inj Aminophylline","Susp Mist Mag Trisilicata","Tab Ciproxin 500mg","Susp Cotrimoxazole","Tetracycline Eye Ointment","Gentamicin Eye Drop","Chloramphenicol Eye Drop","5%Dextrose in water 500mls","5%Dextrose in Saline 500mls","Normal Salin 500mls","Ringer Lactate 500mls","Infusion Metronidazole 100mls","Susp Mist Mag Trisilicata 60mls","Tab Ciproxin 500mg","Cap Doxycycline 100mg","Gauze","Cotton Wool","Surgical Gloves","Examination Gloves","Cannular 21","Cannular 22","Cannular 18","Cannular 16","Plaster 2'","Infusion Set","Potassium Permangnent","Benzyl Benzoate","5cc Syringes/Needlkes","2cc Syringes/Needles","10cc syringes/needles","Tab Phenobarbitone 60mg","Tab Daonil 5mg","Tab Nifedipine 30mg","Tab Diclofenac 50mg","Inj.Hyoscine Bromide","Tab Hyoscione Butyl Bromide","Inj.Hydrocortisone 100mg","Tab Cimetidine 400mg","Water for inj"];

    const consumables = ["4.3% Dextrose in 0.18% Saline","Injection Adrenaline","Susp. Albendazole 400mg","Tab. Aldomet 250mg","Cap Ampiclox 500mg","Ampiclox Drop 60mg/0,6ml","Injection Arthemeter 80mg","Tabs Arthemeter Lumefantrine 80/480mg","Syrp Ascorbic Acid 125mg/5ml","Beclomethasone 50mcg","Beclomethasone 250mcg","Injection Benzathine penicillin 0.6mu","Injection Benzathine penicillin 1.2mu","Injection Benzathine penicillin 2.4mu","Injection Calcium Gluconate 10mg","Injection Ceftriaxone 1g","Tabs Ciprofloxacin 50mg","Tabs Diazepam 5mg","Tabs Erythromycin 500mg","Tabs Erythromycin 250mg","Erythromycin Syrup 250/5ml","Tab Ferrous sulphate","Injection Gentamycin 80mg","Syrup Hyoscine N-butylbromide 5mg/5ml","Tab Ibuprofen 200mg","Tab Ibuprofen 200mg","Multivitamin Drop","Tab Multivite","Syrup Multivite","Nystatin ointment","Nystatin Drop 100,000IU","Tab Nystatin 500,000IU","Injection Omeprazole 20MG","Oral rehydration solution","Tab Prednisolone 5MG","Syrup Promethazine 5MG/5ML","TabPromethazine 10MG","Injection Promethazine 50MG/2L","Injection Quinine 300MG/ML","Tab Quinine 300MG","Cap Tetracyclin 250MG","Foley Catheter 6","Foley Catheter 8","Foley Catheter 10","Foley Catheter 12","Foley Catheter 14","Foley Catheter 16","Foley Catheter 18","Foley Catheter 20","Foley Catheter 22","Urine bag","Xylocaine jelly 30G","Xylocaine jelly 50G","Purit Disinfectant 4L","Chlorine solution","RDT kit for malaria","RDT kit for HIV","RDT for HBV","Packing envelope","Glucometer (Accucheck)","Glucometer strip"];



function getDrugs(){
    let getLen = drugs.length
    let datas = "<tr>";
    for (let i = 0; i < getLen; i++) {
    datas += "<td><i class='fa fa-check text-secondary me-2'></i>" + drugs[i] + "</td>";
    datas += "</tr>";
    }  
    document.getElementById("content").innerHTML = datas;

    let getLen2 = consumables.length
    let datas2 = "<tr>";
    for (let i = 0; i < getLen2; i++) {
    datas2 += "<td><i class='fa fa-check text-primary me-2'></i>" + consumables[i] + "</td>";
    datas2 += "</tr>";
    }  
    document.getElementById("content2").innerHTML = datas2;
}

    
    function getMds(){
        const mds = ["Ministry of Agriculture And Natural Resources","Ministry of Justice","Ministry of Environment","Ministry of Health And Human Services","Ministry of Home Affairs, Information And Culture","Ministry of Inter-Governmental Affairs","Ministry of Poverty Alleviation","Ministry of Religious Affairs And Special Education","Ministry of Trade And Investment","Ministry of Water Resources","Ministry of Works","Ministry of Animal And Fisheries Development","Ministry of Education","Ministry of Finance, Budget And Economic Planning","Ministry of Housing And Energy","Ministry of Local Government And Emirate Affairs","Ministry of Reconstruction, Rehabilitation And Resettlement","Ministry of Higher Education, Science, Technology & Innovation","Ministry of Transports","Ministry of Women Affairs and Social Development","Ministry of Youths Empowerment and Sports","Boplas Industries Limited","Borno Express Transport Corporation","Borno Investment Company Limited","Borno State Agency for Mass Literacy","Borno State Agricultural Mechanization Authority","Borno State Council of Arts & Culture","Borno State Hospitals Management Board","Borno State Internal Revenue Service","Borno State Library Board","Borno State Road Maintenance Agency","Borno State Rural Electrification Board","Borno State Scholarship Board","Borno Teaching Service Commission","Borno Supply Company","Borno State Contributory Health Care Management Agency","Borno Emirate Council","Borno Fertilizer Company","Borno Radio Television Corporation","Borno State Agricultural Development Programme","Borno State Civil Service Commission","Borno State Fire Service","Borno State Hotels Limited","Borno State Liaison Office, Abuja","Borno State Local Government Staff Pension Board","Borno State Pilgrims Welfare Board","Borno State Rural Water & Sanitation Agency","Borno State Sports Council","Borno State Geographical Information Services","Bureau of Public Procurement","Borno State Agency for Coordination of Sustainable Development and Humanitarian Response"];

    let getLen = mds.length
    let datas = "<tr>";
    for (let i = 0; i < getLen; i++) {
    datas += "<td><i class='fa fa-angle-right text-secondary me-2'></i>" + mds[i] + "</td>";
    datas += "</tr>";
    }  
    document.getElementById("bsmdcontent").innerHTML = datas;
    }