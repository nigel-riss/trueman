<?php
    /*
        Template Name: Services Page
    */

    // Page vars
    $page_subtitle      = get_field("page-subtitle");
    $page_title         = get_field("page-title");
    $page_photo         = get_field("page-photo");

    get_header();
?>

    <section class="about about--inner">
        <header class="about__header">
            <p class="about__subtitle"><?php echo $page_subtitle; ?></p>
            <h1 class="about__title"><?php echo $page_title; ?></h1>
        </header>

        <div class="price-inner">
            <div class="price-inner__column">
                <table class="prices-table">
                    <caption>Основные услуги</caption>
                    <tr>
                        <td>Cтрижка мужская</td>
                        <td>40 <span>p.</span></td>
                    </tr>
                    <tr>
                        <td class="prices-table__desc" colspan="2">Подбор стрижки по форме лица, структуре волос, образцам фото. Работа машинкой, ножницами, триммером,
                            подбривание шеи и висков. Удаление лишних волос из ушей, носа, подравнивание бровей. Мытье головы
                            не вставая с кресла (при необходимости до и после стрижки), укладка профессиональными средствами,
                            массаж головы и шеи.</td>
                    </tr>
                    <tr>
                        <td>Стрижка машинкой </td>
                        <td>30 <span>p.</span></td>
                    </tr>
                    <tr>
                        <td class="prices-table__desc" colspan="2"></td>
                    </tr>
                    <tr>
                        <td>Детская стрижка</td>
                        <td>25 <span>p.</span></td>
                    </tr>
                    <tr>
                        <td class="prices-table__desc" colspan="2">Подбор стрижки. Работа машинкой, ножницами, триммером, и, конечно, бла-бла-бла с вашим чадом. Возможен
                            несложный художественный выстриг (hair-tattoo). Наши кресла и персональные раковины предусмотрены
                            главным образом для обслуживания взрослых клиентов (рост 130+), поэтому если ребенок небольшой, то
                            возможен вариант стрижки без мытья головы. Детей младше 5 лет мы берем на обслуживание в исключительных
                            случаях.</td>
                    </tr>
                    <tr>
                        <td>Стрижка бороды</td>
                        <td>25 <span>p.</span></td>
                    </tr>
                    <tr>
                        <td class="prices-table__desc" colspan="2">Стрижка машинкой или ножницами, оформление контуров, мытье бороды, нанесение специального масла.</td>
                    </tr>
                    <tr>
                        <td>Классическое бритьё</td>
                        <td>35 <span>p.</span></td>
                    </tr>
                    <tr>
                        <td class="prices-table__desc" colspan="2">Статусная услуга для настоящих мужчин, выполняется в несколько этапов: распаривание кожи лица горячим
                            полотенцем, нанесение специального крема перед бритьем, нанесение пены помазком из барсучьей шерсти,
                            бритье одноразовым лезвием в специальном станке (шаветт). Затем на кожу лица наносится лосьон и/или
                            крем, который успокаивает и снимает раздражение после бритья, помогает решить проблему вросших волос,
                            питает и восстанавливает кожу. В заключение делается массаж лица с применением бальзама или крема
                            после бритья.</td>
                    </tr>
                    <tr>
                        <td>Королевское бритьё</td>
                        <td>50 <span>p.</span></td>
                    </tr>
                    <tr>
                        <td class="prices-table__desc" colspan="2">Королевское бритье - это настоящий ритуал, состоящий из нескольких этапов. Выполняется с применением
                            косметики премиум-класса от Truefitt & Hill. Вы можете <a href="royal.html">почитать подробнее</a>                        о королевском бритье.</td>
                    </tr>
                </table>
            </div>
            <div class="price-inner__column price-inner__column--right">
                <table class="prices-table">
                    <caption>Комплексные услуги</caption>
                    <tr>
                        <td>Отец + сын</td>
                        <td>60 <span>p.</span></td>
                    </tr>
                    <tr>
                        <td class="prices-table__desc" colspan="2">Включает в себя мужскую стрижку для папы и детскую стрижку для сына 5-10 лет. Если сын старше 10 лет,
                            то можно записаться на стрижку Друг + Друг</td>
                    </tr>
                    <tr>
                        <td>Друг + друг</td>
                        <td>70 <span>p.</span></td>
                    </tr>
                    <tr>
                        <td class="prices-table__desc" colspan="2">Всё, что перечислено в «мужской стрижке» только немного дешевле. Предусматривает последовательное обслуживание
                            каждого клиента (один стрижется, второй играет в PS). По возможности обслуживание проводится сразу
                            двух клиентов у двух мастеров.</td>
                    </tr>
                    <tr>
                        <td>Стрижка + Бритьё</td>
                        <td>70 <span>p.</span></td>
                    </tr>
                    <tr>
                        <td class="prices-table__desc" colspan="2"></td>
                    </tr>
                </table>
                <table class="prices-table">
                    <caption>Дополнительные услуги</caption>
                    <tr>
                        <td>Укладка волос</td>
                        <td>10 <span>p.</span></td>
                    </tr>
                    <tr>
                        <td class="prices-table__desc" colspan="2"></td>
                    </tr>
                    <tr>
                        <td>Камуфляж седины</td>
                        <td>25 <span>p.</span></td>
                    </tr>
                    <tr>
                        <td class="prices-table__desc" colspan="2"></td>
                    </tr>
                    <tr>
                        <td>Бритьё головы</td>
                        <td>35 <span>p.</span></td>
                    </tr>
                    <tr>
                        <td class="prices-table__desc" colspan="2">Распаривание кожи головы горячим полотенцем, нанесение пены помазком из барсучьей шерсти, бритье одноразовым
                            лезвием в специальном станке (шаветт). На выбор применение нескольких средств после бритья.</td>
                    </tr>
                </table>
                <div class="price-inner__booking"><a class="button ms_booking" href="#">Запись онлайн</a></div>
            </div>
            <div class="price-inner__deco"></div>
        </div>
    </section>

<?php
    get_footer();
?>