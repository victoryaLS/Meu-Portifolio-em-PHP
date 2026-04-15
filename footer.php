<?php
$contact = [
    [
        "icon" => "ph ph-linkedin-logo",
        "title" => "Linkedin",
        "link" => "https://www.linkedin.com/in/Victórya-Lima/",
        "alt" => "Linkedin",
        "link-logo" => "ph ph-arrow-up-right"
    ],
    [
        "icon" => "ph ph-instagram-logo",
        "title" => "Instagram",
        "link" => "https://www.instagram.com/iii_vickk/",
        "alt" => "Instagram",
        "link-logo" => "ph ph-arrow-up-right"
    ],
    [
        "icon" => "ph ph-github-logo",
        "title" => "Github",
        "link" => "https://www.github.com/victoryaLS/",
        "alt" => "GitHub",
        "link-logo" => "ph ph-arrow-up-right"
    ],
    [
        "icon" => "ph ph-envelope-simple",
        "title" => "E-mail",
        "link" => "mailto:limasouzavick175@gmail.com",
        "alt" => "E-mail",
        "link-logo" => "ph ph-arrow-up-right"
    ],
];
?>
<div class="bg-center bg-cover mx-auto flex flex-col justify-center items-center h-screen" style="background-image: url('/img/background_contacts.webp');">
    <p class="font-inconsolata subtitle mt-20 text-red-800">Contato</p>
    <h1 class="text-white mt-4 text-bold font-asap title-md">Gostou do meu Portifólio?</h1>
    <p class="text-white font-maven-pro text-md mt-4 w-1/2 text-center">Entre em contato ou acompanhe as minhas redes sociais!</p>
    
    <span>
        <?php foreach ($contact as $contato):  ?>
            <a href="<?= $contato["link"] ?>" target="_blank">
                <div class="bg-[#292C34] mt-4 flex rounded-lg p-3 grid gap-x-8 gap-y-4 grid-cols-3 items-center hover:border-2 border-blue-400 ">
                    <i class="<?= $contato["icon"] ?> text-white text-2xl hover:text-blue-400" alt=" <?= $contato["alt"] ?>"></i>
                    <h3 class=" text-white text-md font-maven-pro text-center "><?= $contato["title"] ?></h3>
                    <i class="<?= $contato["link-logo"] ?> text-blue-400 text-2xl justify-self-end" target="_blank"></i>
                </div>
            </a>
        <?php endforeach ?>
    </span>
</div>