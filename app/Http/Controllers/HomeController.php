<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App;

class HomeController extends Controller
{
    //
    public function homePage(Request $request){
        $data =  array();
        if(Session::get('lang')!="")
        {

            if(Session::get('lang')=='no'):
                $position = json_decode($this->grabIpInfo($request->ip()));
                if(isset($position->name)){
                    if (in_array($position->name, $this->russianSupportingCountries())){

                        Session::put('lang', 'yes');
                        // App::setLocale('ru');
                        return redirect('/locale/ru');
                    }
                    else{
                        // App::setLocale('/locale/ru');
                        Session::put('lang', 'yes');
                        return redirect('/locale/en');
                    }
                    return view('index');
                } else {
                    return view('index');
                }



            else:

                return view('index');
            endif;
        }
        else{

            $position = json_decode($this->grabIpInfo($request->ip()));
            if(isset($position->name)){

                    if (in_array($position->name, $this->russianSupportingCountries())){

                        Session::put('lang', 'yes');
                        // App::setLocale('ru');
                        return redirect('/locale/ru');
                    }
                    else{
                        // App::setLocale('/locale/ru');
                        Session::put('lang', 'yes');
                        return redirect('/locale/en');
                    }
                }

                }
                return view('index');

    }

    public function dynamicPage(){
        $data =  array();
        if(App::getLocale()=='en'){
            $data['content'] = $this->getData();
        } else{
            $data['content'] = $this->getDataRu();
        }

        return view('page',['data'=>$data]);

        // $data['content'] = $this->getData();
        // return view('page',['data'=>$data]);
    }
    public function grabIpInfo($ip)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "https://api.ipgeolocationapi.com/geolocate/" . $ip);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $returnData = curl_exec($curl);
        curl_close($curl);
        return $returnData;
    }
    public function russianSupportingCountries(){
        return array(
            'Russia',
            'Belarus',
            'South Ossetia',
            'Transnistria',
            'Kazakhstan',
            'Kyrgyzstan',
            'Tajikistan',
            'Abkhazia',
            'Ukraine',
            'Moldova',
            'Uzbekistan',
            'Armenia',
            'Poland',
            'Romania',
            'Georgia',
            'Armenia',
            'Azerbaijan',
            'Estonia',
            'Latvia',
            'Lithuania',

        );
    }
    public function getData(){
        return $data = array(
            'Who-We-are' =>array('Chortoq Foundation IS A NON-PROFIT ORGANISATION.','<p>We are committed to support underprivileged students in Uzbekistan and open new frontiers of opportunities for them by providing professional courses in the hospitality sector. We believe every person deserves a fair chance to life and it is only through education that one can create a better world. Every initiative in this journey by ATECA is a major advance in creating a promising future for the youth of Uzbekistan by helping them achieve their full potential.</p>
            <p>Change is rippling through business and social spheres. However, only&nbsp;when talk turns to action, will we see a level playing field once and for all.&nbsp;</p>
            <p>Special emphasis is given to education and training of women also so that they and their families get empowered. Diversity is integral to business sustainability and overall success. Boosting the number of women in work is not just a moral imperative but also has a measurable impact on the bottom line. Chortoq Foundation is a platform for people and organisations with bold ideas and vision for progress.</p>'),

            'What-We-Do' => array('Chortoq Foundation’S PRIMARY GOAL IS TO DRIVE POSITIVE CHANGE IN THE HOSPITALITY SECTOR IN UZBEKISTAN.','<p>Our aim is to help people to achieve their full economic and social potential. Through our educational and training programs we aim to become positive contributors to society. By designing and funding programs that are socially and economically integrated, impactful, sustainable and scalable, we want to remove the obstacles that hinder progress in the hotel industry.</p>
<p>Our key focus is to create educational training models and systems that reach the poor and promote and support gainful employment in the hotel industry. By providing planning, professional learning and ongoing guidance we ensure that every individual can experience the transformational power of education.</p>
<ul>
<li class="list">Through our programs we aim to provide access to quality hospitality training courses for youth.</li>
<li class="list">We are dedicated to foster ideas and build relationships that create lasting change.</li>
<li class="list">Delivering analytical reports that shed light on the challenges facing under privileged people&rsquo;s growth in the hospitality sector.</li>
<li class="list">Presenting opportunities and solutions for state policymakers to advance educational choice in the hotel sector.</li>
<li class="list">Driving policies and programs that raise academic achievement and close opportunity gaps in the hospitality industry.</li>
<li class="list">Working alongside a diverse group of partners including hotel operators, organisations, business leaders, educational reform organisations and others to create lasting change.</li>
</ul>'),


            'Where-We-Work' => array('COMMITTED TO MAKE A DIFFERENCE TO THE SOCIAL AND ECONOMIC LANDSCAPE OF UZBEKISTAN.','<p>It is extremely important for us at ATECA. The primary purpose of our business is to create social value beyond financial performance. The formation of Chortoq Foundation is part of our corporate social responsibility practices. By creating shared prosperity, we want the local communities to benefit from us. Transformation to a progressive society cannot be achieved without comprehensive collaboration and concerted efforts to realize the set objectives.</p>
            <p>Tourism gives people opportunity to live and work where you want, the opportunity to empower communities, to promote sustainable growth. More importantly, it allows people to be proud of their roots, their heritage and their country. This can only have a positive impact on society and benefit all in the Republic of Uzbekistan.</p>
            <p>Uzbekistan is developing its tourism offering sustainably, protecting its rural communities. Therefore, this project is an important opportunity for Uzbekistan as travel and tourism will offer enormous opportunities for growth, development and job creation.</p>
            <p>The key objectives behind Chortoq Foundation&rsquo;s initiatives is to support and facilitate tourism growth as well as the hospitality sector. Uzbekistan&rsquo;s rural communities are unique and diverse: Tourism will ensure Uzbekistan&rsquo;s rural communities are not left behind and their ways of life are protected with new economic opportunities.</p>
            <p>It is part of our objective to reach out to new markets and users to enhance the capacity for international cooperation by facilitating mobility of people, to open and develop new streams of tourism, to transfer technology and knowledge and to achieve the right balance between the level of economic growth and maintenance of the environment.</p>'),

            'Get-Involved' => array('LET US HELP THE YOUTH OF UZBEKISTAN LIVE MORE PRODUCTIVE LIVES.','<p><strong>Philanthropy Partners</strong></p>
<p>Our collective efforts depend on the support and resources of governments, the private sector, communities and individuals who share a common goal with us. We are accountable and transparent at every step of the way. Let us together contribute to the changes that will help the youth of Uzbekistan live more productive lives.</p>
<p>Only great education and training can unlock opportunities in tourism, a key pillar of the economy of Uzbekistan, and lift people out of poverty by helping them realise their dreams.</p>
<p>When you donate to Chortoq Foundation, you join our mission to fight educational inequality.&nbsp; Give the gift of education to create a better world.</p>'),
            'press'=>array('','<p>Know about the latest news and announcements at Chortoq Foundation. For specific enquiries journalists can reach us on info@atecafoundation.com</p>',),
            'careers'=>array('','<p>We believe that passionate people have the power to change lives. By creating an environment of togetherness, where we draw on the differences and experiences of each one, we include and serve everyone.</p>'),
            'contact-us'=>array('','<p>Tell us what you would like to know? We are only a phone call away. You can reach us on foundtion@chortoqgrandresort.com or call us on +998 71150 36 63</p>'),
            'About-ATECA-Foundation'=>array('',''),
        );
    }

    public function getDataRu(){
        return $data = array(
            'Who-We-are' =>array('ФОНД ATECA  - НЕКОММЕРЧЕСКАЯ ОРГАНИЗАЦИЯ.','<p>Мы стремимся поддерживать малоимущих студентов в Узбекистане, &nbsp;открывать для них новые возможности, предлагая профессиональные курсы в сфере гостеприимства. Мы считаем, что каждый человек заслуживает справедливого шанса на достойную жизнь, и только благодаря образованию можно создать лучший мир. Каждая инициатива ATECA в этом направлении - крупное достижение в процессе создания многообещающего будущего для молодежи Узбекистана, помощь для них в полной реализации своего потенциала. Изменения постоянно происходят в деловой и социальной сферах. Тем не менее, только когда слова превратятся в действия, мы увидим ровное игровое поле для всех участников. Особое внимание нами уделяется образованию и обучению женщин, с тем чтобы они и их семьи были задействованы. Разнообразие является неотъемлемой частью устойчивости бизнеса и общего успеха. Увеличение числа работающих женщин является не только моральным долгом, но и оказывает ощутимое влияние на результат. Фонд ATECA - это платформа для людей и организаций со смелыми идеями и видением прогресса.</p>'),

            'What-We-Do' => array('ОСНОВНАЯ ЦЕЛЬ ФОНДА ATECA – ПРИВЕСТИ К ПОЗИТИВНЫМ ИЗМЕНЕНИЯМ В СФЕРЕ ГОСТЕПРИИМСТВА В УЗБЕКИСТАНЕ.','<p>Наша цель - помочь людям полностью реализовать свой экономический и социальный потенциал. Посредством наших образовательных и обучающих программ мы стремимся стать позитивными участниками общества. Разрабатывая и финансируя социально-экономически интегрированные, эффективные, устойчивые и масштабные программы, мы хотим устранить препятствия, мешающие прогрессу в гостиничной индустрии.</p>
            <p>Нашей основной задачей является создание образовательных моделей и систем, которые охватывают малоимущие слои населения, способствуют и поддерживают их прибыльную занятость в гостиничной индустрии. Обеспечивая планирование, профессиональное обучение и постоянное руководство, мы гарантируем, что каждый человек может испытать на себе трансформационную силу образования.</p>
            <p>С помощью наших программ мы стремимся обеспечить доступ молодежи к качественным учебным курсам по гостеприимству.</p>
            <p>Мы стремимся развивать идеи и строить отношения, влекущие за собой долгосрочные изменения.</p>
            <p>Предоставление аналитических отчетов, проливающих свет на проблему роста числа &nbsp;привилегированных людей в сфере гостеприимства. Представление возможностей и решений на уровень государственных политиков по &nbsp;продвижению образования в сфере индустрии гостеприимства.</p>
            <p>Проведение &nbsp;политики и программ, повышающих академическую успеваемость и заполняющих пробелы в сфере гостеприимства.</p>
            <p>Совместная работа с разнообразной группой партнеров, включая операторов отелей, организации, бизнес-лидеров, организации образовательной реформы и другими.</p>'),


            'Where-We-Work' => array('НЕОБХОДИМО ОБЯЗАТЕЛЬНО УЧИТЫВАТЬ РАЗНООБРАЗИЕ СОЦИАЛЬНО-ЭКОНОМИЧЕСКОГО ЛАНДШАФТА УЗБЕКИСТАНА.','<p>Это очень важно для нас в ATECA. Основная цель нашего бизнеса - создать социальную ценность за пределами финансовых показателей. Создание фонда ATECA является частью нашей практики корпоративной и социальной ответственности. Работая на общее процветание, мы хотим, чтобы местное население получало выгоду от нашей деятельности. Трансформация в прогрессивное общество не может быть достигнута без всестороннего сотрудничества и согласованных усилий по реализации поставленных целей.</p>
            <p>Туризм дает людям возможность жить и работать там, где они хотят, расширяет возможности общества, содействует устойчивому росту. Что еще более важно, он позволяет людям гордиться своими корнями, своим наследием и своей страной. Это может оказать только положительное влияние на общество и принести пользу всем в Республике Узбекистан.</p>
            <p>Узбекистан постоянно развивает туристические предложения, защищающие его сельское население. Поэтому этот проект является важной возможностью для Узбекистана, так как путешествия и туризм предложат огромные возможности для роста, развития и создания рабочих мест.</p>
            <p>Основной целью Фонда АТЕКА является поддержка и содействие росту туризма, а также всей сферы гостеприимства. Сельское население Узбекистана уникально и разнообразно: туризм обеспечит, чтобы оно не было отстающим, а образ жизни его представителей был защищен новыми экономическими возможностями.</p>
            <p>Наша задача - выход на новые рынки и потребителей с целью расширения &nbsp;международного сотрудничества, &nbsp;путем стимулирования мобильности людей, открытия и развития новых направлений туризма, передачи технологий, знаний, и достижения правильного баланса между уровнем экономического роста и охраной окружающей среды.</p>'),

            'Get-Involved' => array('ПОЗВОЛЬТЕ НАМ ПОМОЧЬ МОЛОДЕЖИ УЗБЕКИСТАНА ЖИТЬ БОЛЕЕ ПЛОДОТВОРНОЙ ЖИЗНЬЮ.
            Партнеры по Благотворительности','<p>Наши общие усилия зависят от поддержки и ресурсов правительства, частного сектора, сообществ и частных лиц, которые разделяют с нами нашу цель. Мы ответственны и прозрачны на каждом этапе пути.</p>
            <p>Позвольте нам помочь молодежи Узбекистана жить более плодотворной жизнью. &nbsp;</p>
            <p>Только хорошее образование и профессиональная подготовка способны открыть новые возможности в туризме, являющемся основным столпом экономики Узбекистана, вывести людей из нищеты, помогая им осуществить свои мечты.&nbsp;</p>
            <p>Делая пожертвования в Фонд ATECA, Вы присоединяетесь к нашей миссии по борьбе с неравенством в сфере образовании. Даря людям возможность образования, мы создаем лучший мир.</p>'),
            'press'=>array('','<p>Know about the latest news and announcements at Chortoq Foundation. For specific enquiries journalists can reach us on info@atecafoundation.com</p>',),
            'careers'=>array('','<p>Мы верим, что целеустремленные люди могут  изменить жизнь. Мы создаем единую среду, в которой учитываются отличия и опыт каждого участника, мы открыты для всех!</p>'),
            'contact-us'=>array('','<p>Расскажите нам, что Вы хотели бы знать? Мы находимся от Вас на расстоянии телефонного звонка. Вы можете связаться с нами по почте corporate@atecaholding.com или позвонить нам.</p>'),
            'About-ATECA-Foundation'=>array('',''),
        );
    }

    public function getSlider(){

    }
}
