<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function agriculture(){
      return view('pages.topic', [
        'details' => $this->agriculture,
        ]);
    }



    public $agriculture = array(
        'title' => 'Agriculture',
        'description' => "
        <p>Agriculture is a major sector of the Nigerian economy, employing about 70% of the population and contributing about 23% to the country's Gross Domestic Product (GDP). Nigeria is a leader in various types of agricultural production, given its vast arable land, large population, and diverse climatic conditions. The sector is dominated by small-scale farmers who produce crops such as cassava, rice, maize, yams, pineapple, palm sorghum, vegetables, and a vast majority of other agricultural produce, but there are opportunities for investment in large-scale commercial farming, agribusiness, and value-added processing.  The government has identified agriculture as a key sector for economic growth and has launched various initiatives to promote investment in the sector.</p>
        <p> There are opportunities for investment in areas such as mechanized farming, irrigation systems, food processing, crop processing, storage and packaging, and export. Nigeria's agricultural trade value is relatively low, but there is potential for growth in export markets, especially for crops like cocoa, rubber, and palm oil. Competitive advantage in this sector includes vast arable land, abundant natural resources, a large pool of cheap labor, a large and fertile land mass, a diverse range of agricultural products, and a supportive regulatory environment. Shared value in this sector includes job creation, food security, and sustainable development.</p>"
    );


    
public function oil(){
    return view('pages.topic', [
    'details' => $this->oil,
    ]);
}


    public $oil = array(
        'title' => 'Oil And Gas',
        "description" => "
        <p>Nigeria is the largest oil producer in Africa and the sixth-largest producer globally. The sector is the backbone of Nigeria’s economy, accounting for about 70% of government revenue and 90% of export earnings. However, the sector is highly dependent on fluctuations in global oil prices and is susceptible to geopolitical risks. There are opportunities for investment in upstream and downstream activities, including exploration, production, gas monetization, refinery development, renewable energy, and distribution. Nigeria's oil and gas trade value is significant, with exports of crude oil, natural gas, and petroleum products accounting for over 90% of total exports. The country has a competitive advantage in the sector due to its abundant oil reserves, a well-developed infrastructure, and skilled labor force.</p>
        <p>Shared value in this sector includes the creation of employment opportunities and the provision of energy for domestic and international markets. Competitive advantage in this sector includes abundant natural resources and established infrastructure.</p>
        "
    );


    public function education(){
        return view('pages.topic', [
        'details' => $this->education,
        ]);
    }
    

    public $education = array(
        'title' => 'Education',
        "description" => "
        <p>Nigeria's education sector is critical to the country's human development and economic growth, providing educational opportunities to individuals and communities. The sector is dominated by public education institutions, but there are opportunities for investment in private education services and e-learning platforms. However, the sector faces challenges such as inadequate infrastructure and limited access to education services in rural areas.</p>
        <p>Opportunities for investment in the sector include education technology, vocational training, and teacher training. Nigeria's education trade value is relatively low, but there is potential for growth in the domestic market and as an international education destination. Competitive advantages in this sector includes a large and growing population, a need for improved education services and infrastructure, and a supportive regulatory environment. Shared value in this sector includes human capital development and economic growth. Competitive advantage in this sector includes a large and growing population, a need for improved education services and infrastructure, and a supportive regulatory environment.</p>
       "
    );

    public function healthCare(){
    return view('pages.topic', [
    'details' => $this->health,
    ]);
}


    public $health = array(
        'title' => 'Health Care',
        "description" => "
        <p>Nigeria's healthcare sector is critical to the country's human development and economic growth, providing medical services to individuals and communities. The sector is dominated by public healthcare facilities, but there are opportunities for investment in private healthcare services and medical research. However, the sector faces challenges such as inadequate infrastructure and limited access to healthcare services in rural areas. Opportunities for investment in the sector include healthcare technology, medical equipment, and pharmaceuticals.</p>
        <p>Nigeria's healthcare trade value is relatively low, but there is potential for growth in the domestic market and as a medical tourism destination. Competitive advantage in this sector includes a large and growing population, a need for improved healthcare services and infrastructure, and a supportive regulatory environment.
Shared value in this sector includes improved health outcomes, job creation, and economic growth.</p>
       "
    );

    public $power = array(
        'title' => 'Power And Energy',
        "description" => "
        <p>Nigeria's power and energy sector is critical to the country's economic growth, providing electricity to households and businesses. The sector is dominated by the use of fossil fuels, government-owned transmission and distribution companies, but there are opportunities for investment in renewable energy sources such as solar and wind power and independent power production. However, the sector faces challenges such as inadequate infrastructure and high costs of energy production. </p>
        <p>There are opportunities for investment in areas such as power generation, transmission, and distribution, energy storage solutions, and smart grid technology as well as renewable energy development. Nigeria's power and energy trade value is relatively low, but there is potential for growth in the domestic and international markets. Competitive advantage in this sector includes abundant natural resources, a need for improved energy infrastructure, sustainable energy solutions, and a supportive regulatory environment. Shared value in this sector includes increased access to electricity, job creation, and sustainable development. </p>
       "
    );

    public function manufacturing(){
        return view('pages.topic', [
        'details' => $this->manufacturing,
        ]);
    }

    public $manufacturing = array(
        'title' => 'Manufacturing',
        "description" => "
        <p>Nigeria's manufacturing sector is diverse and includes industries such as food and beverage production/ processing, textiles, cement production, and steel. The sector accounts for about 10% of GDP and is a key driver of economic growth. However, the sector faces challenges such as inadequate infrastructure, high production costs, and low-capacity utilization. Opportunities for investment in the sector include value-added manufacturing, export-oriented production, technology transfer, and digitalization.</p>
        <p>Nigeria's manufacturing trade value is relatively low, but there is potential for growth in domestic/regional and international markets. Competitive advantage in this sector includes a large and growing domestic market, abundant natural resources, and a young and growing population. Shared value in this sector includes job creation, technology transfer, and industrial development.</p>
       "
    );



    public function informationTechnology(){
        return view('pages.topic', [
        'details' => $this->information,
        ]);
    }

    public $information = array(
        'title' => 'Information And Communication technology(ICT)',
        "description" => "
        <p>The ICT sector is critical to Nigeria's economic growth, providing digital solutions for businesses and individuals. The sector is dominated by private sector-led initiatives, but there are opportunities for investment in government-led initiatives such as e-government and digital infrastructure development. Opportunities for investment in the sector include cybersecurity, digital payment solutions, and smart city technology. </p>
        <p>Opportunities for investment in the sector include cybersecurity, digital payment solutions, and smart city technology. Nigeria's ICT trade value is relatively high, with investments from local and international technology companies. Shared value in this sector includes improved connectivity, job creation, and economic growth. Competitive advantage in this sector includes a large and growing population, a need for improved digital solutions and infrastructure, and a supportive regulatory environment.</p>
       "
    );

    public function waterSanitation(){
        return view('pages.topic', [
        'details' => $this->water,
        ]);
    }

    public $water = array(
        'title' => 'Water Sanitation',
        "description" => "
        <p>The water and sanitation sector is critical to Nigeria's human development, providing access to safe water and sanitation services. The sector is dominated by public utilities, but there are opportunities for investment in private water and sanitation services, water treatment, and wastewater management. Opportunities for investment in the sector include water infrastructure development, sanitation solutions, and water conservation technology. </p>
        <p>Nigeria's water and sanitation trade value is relatively low, but there is potential for growth in the domestic market. Shared value in this sector includes improved health outcomes, job creation, and sustainable development. Competitive advantage in this sector includes a large and growing population, a need for improved water and sanitation services and infrastructure, and a supportive regulatory environment.</p>
       "
    );

    public function pharmaceuticals(){
        return view('pages.topic', [
        'details' => $this->pharmaceuticals,
        ]);
    }

    public $pharmaceuticals = array(
        'title' => 'Pharmaceuticals',
        "description" => "
        <p>The pharmaceuticals sector is essential to Nigeria's human development, providing access to essential medicines and healthcare products. The sector is dominated by local and multinational pharmaceutical companies, but there are opportunities for investment in research and development, production, and distribution. Opportunities for investment in the sector include healthcare innovation, generic drug production, and clinical trials. Nigeria's pharmaceuticals trade value is relatively low, but there is potential for growth in the domestic and international markets.</p>
        <p>Shared value in this sector includes improved health outcomes, job creation, and economic growth. Competitive advantage in this sector includes a large and growing population, a need for improved healthcare services and products, and a supportive regulatory environment. Nigeria's mining trade value is relatively high, with exports of crude oil, natural gas, and solid minerals. Competitive advantage in this sector includes abundant natural resources, a large and growing population, and a supportive regulatory environment.</p>
       "
    );

    public function mining(){
        return view('pages.topic', [
        'details' => $this->mining,
        ]);
    }

    public $mining = array(
        'title' => 'Mining And Solid Minerals',
        "description" => "
        <p>The mining and solid minerals sector is a significant contributor to Nigeria's economy, providing minerals and metals for local consumption and export. The sector is dominated by the extraction of crude oil, but there are opportunities for investment in solid minerals such as gold, iron ore, tin, and limestone. However, the sector faces challenges such as inadequate infrastructure and limited access to financing. Opportunities for investment in the sector include mineral exploration and extraction, mineral processing, mining equipment, and export logistics.</p>
        <p>Nigeria's mining and solid minerals trade value is relatively low, but there is potential for growth in the domestic and international markets. Shared value in this sector includes job creation, mineral resource development, and economic growth. Competitive advantage in this sector includes abundant mineral resources a large and growing population, and a supportive regulatory environment.</p>
       "
    );

    public function telecommunication(){
        return view('pages.topic', [
        'details' => $this->telecommunication,
        ]);
    }

    public $telecommunication = array(
        'title' => 'Telecommunication',
        "description" => "
        <p>Nigeria's telecommunications sector is one of the fastest growing in Africa and has attracted significant investment in recent years, providing communication services to individuals and businesses.  The sector accounts for about 10% of GDP and has created numerous employment opportunities. The sector is dominated by private telecommunications companies, but there are opportunities for investment in broadband infrastructure and digital innovation. However, the sector faces challenges such as poor infrastructure and high costs of service provision.</p>
        <p>Opportunities for investment in the sector include 5G technology, digital payment solutions, cybersecurity, network expansion, broadband penetration, and value-added services. Nigeria's telecommunications trade value is significant, with investments from local and international telecommunications companies and mobile phones being one of the country's top export products. Competitive advantage in this sector includes a large and growing market, a young and tech-savvy population, a need for improved communication services and a supportive regulatory environment. Shared value in this sector includes increased connectivity, job creation, and economic growth. </p>
       "
    );

    public function creative(){
        return view('pages.topic', [
        'details' => $this->creative,
        ]);
    }

    public $creative = array(
        'title' => 'Creative Industry',
        "description" => "
        <p>The creative industry is a growing contributor to Nigeria's economy, providing entertainment and cultural products for local consumption and export. The sector is dominated by music, film, and fashion, but there are opportunities for investment in other areas such as art, design, and advertising. </p>
        <p>However, the sector faces challenges such as limited access to financing and piracy. Opportunities for investment in the sector include talent management, production facilities, and distribution networks. Nigeria's creative industry trade value is relatively low, but there is potential for growth in the domestic and international markets. Shared value in this sector includes job creation, cultural preservation, and economic growth. Competitive advantage in this sector includes a diverse culture and creative talent pool, a growing middle class, and a supportive regulatory environment.</p>
       "
    );

    public function sport(){
        return view('pages.topic', [
        'details' => $this->sport,
        ]);
    }

    public $sport = array(
        'title' => 'Sports',
        "description" => "
        <p>Nigeria's sports industry is a growing contributor to the economy, providing entertainment, promoting physical fitness, and employment opportunities for local and international markets.  The sector is dominated by football, but there are opportunities for investment in other sports such as basketball, athletics, and boxing. However, the sector faces challenges such as limited access to financing and inadequate infrastructure. There are opportunities for investment in areas such as sports facilities, talent development, and sports management. Nigeria's sports trade value is relatively low, but there is potential for growth in the domestic and international markets, particularly with the increasing popularity of African athletes on the global stage. Competitive advantages in this sector include a large and passionate fan base, a talented pool of athletes, and a supportive regulatory environment.</p>
        <p>Opportunities for investment in the sector include sports infrastructure development, talent management, and sports tourism. Nigeria's sports trade value is relatively low, but there is potential for growth in the domestic and international markets, particularly with the increasing popularity of African athletes on the global stage. Shared value in this sector includes job creation, sports development, and cultural exchange. Competitive advantages in this sector includes a large and passionate fan base, a talented pool of athletes, and a supportive regulatory environment. </p>
       "
    );

    public function renewable(){
        return view('pages.topic', [
        'details' => $this->renewable,
        ]);
    }


    public $renewable = array(
        'title' => 'Renewable Energy',
        "description" => "
        <p>Nigeria's renewable energy sector is a growing contributor to the economy, providing alternative sources of energy and reducing reliance on fossil fuels. The sector is dominated by solar and wind energy, but there are opportunities for investment in other sources such as hydropower and biomass. However, the sector faces challenges such as inadequate infrastructure and limited access to financing. There are opportunities for investment in areas such as renewable energy financing, energy storage solutions, and smart grid technology.</p>
        <p>Nigeria's renewable energy trade value is relatively low, but there is potential for growth in the domestic and international markets. Competitive advantage in this sector includes abundant natural resources, a need for sustainable energy solutions, and a supportive regulatory environment.</p>
       "
    );

    public function transportation(){
        return view('pages.topic', [
        'details' => $this->transportation,
        ]);
    }

    public $transportation = array(
        'title' => 'Transportation',
        "description" => "
        <p>Nigeria's transportation sector is a critical component of the economy, facilitating the movement of people and goods across the country. The sector is dominated by road transportation, but there are opportunities for investment in rail, air, and water transportation. However, the sector faces challenges such as inadequate infrastructure and high operating costs. Opportunities for investment in the sector include mass transit systems, logistics, digitalization, and intermodal transportation. </p>
        <p>Nigeria's transportation trade value is relatively low, but there is potential for growth in the domestic and international markets. Competitive advantage in this sector includes a large and growing market, a need for improved transportation services and infrastructure, and a supportive regulatory environment. The transport and logistics trade value is relatively high, with investments from local and international logistics companies. Shared value in this sector includes job creation, improved transportation infrastructure, and economic growth.</p>
       "
    );

    public function environment(){
        return view('pages.topic', [
        'details' => $this->environment,
        ]);
    }


    public $environment = array(
        'title' => 'Environment',
        "description" => "
        <p>The environment sector is critical to Nigeria's sustainable development, providing solutions for climate change mitigation and environmental protection. The sector is dominated by government-led initiatives, but there are opportunities for investment in private sector-led environmental solutions such as renewable energy, waste management, and biodiversity conservation. Opportunities for investment in the sector include environmental consulting, green technology, and carbon credit trading.</p>
        <p> Nigeria's environment trade value is relatively low, but there is potential for growth in the domestic and international markets, particularly as the country faces environmental challenges such as desertification, deforestation, and pollution. Shared value in this sector includes sustainable development, job creation, and climate action. Competitive advantage in this sector includes abundant natural resources, a need for sustainable environmental solutions, and a supportive regulatory environment.</p>
       "
    );


    public function hospitality(){
        return view('pages.topic', [
        'details' => $this->hospitality,
        ]);
    }

    public $hospitality = array(
        'title' => 'Hospitality and Tourism',
        "description" => "
        <p>Nigeria's hospitality and tourism sector is a growing contributor to the economy, driven by domestic and international tourism. The sector is dominated by hospitality services, but there are opportunities for investment in areas such as tourist attractions, entertainment, cultural attractions, ecotourism, and event management. However, the sector faces challenges such as inadequate infrastructure, limited access to funding, and security concerns. </p>
        <p>There are opportunities for investment in areas such as destination marketing, tourism infrastructure, sustainable tourism practices, and hospitality services and technology. Nigeria's hospitality and tourism trade value is relatively low, but there is potential for growth in the domestic and international markets. Competitive advantages in this sector includes a diverse culture, a diverse range of cultural attractions, natural resources, a growing middle class, and a supportive regulatory environment.</p>
       "
    );

    public function banking(){
        return view('pages.topic', [
        'details' => $this->banking,
        ]);
    }

    public $banking = array(
        'title' => 'Banking and Finance',
        "description" => "
        <p>Nigeria's banking and finance sector is a critical driver of economic growth, providing credit facilities and financial services to individuals and businesses. The sector accounts for about 7% of GDP and has experienced significant growth in recent years. However, the sector faces challenges such as high loan default rates and regulatory compliance issues. There are opportunities for investment in areas such as digital banking, microfinance, and fintech solutions.</p>
        <p>Nigeria's banking and finance trade value is significant, with remittances being one of the country's top sources of foreign exchange. The competitive advantage in this sector includes a large population with a high demand for financial services, a well-developed banking infrastructure, and a supportive regulatory environment. Shared value in this sector includes financial inclusion, access to capital, and economic growth. </p>
       "
    );

    public function construction(){
        return view('pages.topic', [
        'details' => $this->construction,
        ]);
    }

    public $construction = array(
        'title' => 'Construction',
        "description" => "
        <p>Nigeria's construction sector is an important contributor to the country's economic growth, accounting for about 4% of GDP. The sector is driven by government infrastructure projects and private investment in real estate development. However, the sector faces challenges such as inadequate funding and delays in project implementation. There are opportunities for investment in areas such as affordable housing, infrastructure development, and public-private partnerships.</p>
        <p>Nigeria's construction trade value is relatively low, but there is potential for growth in the domestic market. Competitive advantage in this sector includes a large and growing population, a need for infrastructure development, and a supportive regulatory environment. Shared value in this sector includes job creation, infrastructure development, and sustainable urbanization.</p>
       "
    );

    public function estate(){
        return view('pages.topic', [
        'details' => $this->estate,
        ]);
    }

    public $estate = array(
        'title' => 'Real Estate',
        "description" => "
        <p>Nigeria's real estate sector is a significant contributor to the economy, providing residential and commercial properties for local and international investors. The sector is dominated by private developers, but there are opportunities for investment in affordable housing and sustainable building practices. However, the sector faces challenges such as inadequate infrastructure and limited access to financing. There are opportunities for investment in areas such as real estate financing, property management, and green building practices.</p>
        <p>Nigeria's real estate trade value is relatively high, with investments from local and international investors. Competitive advantage in this sector includes a growing middle class, a need for affordable housing, and a supportive regulatory environment. Shared value in this sector includes job creation, infrastructure development, and economic growth. </p>
       "
    );

    public function retail(){
        return view('pages.topic', [
        'details' => $this->retail,
        ]);
    }



    public $retail = array(
        'title' => 'Retail and Wholesale',
        "description" => "
        <p>The retail and wholesale sector is a significant contributor to Nigeria's economy, providing goods and services to the domestic market. The sector is dominated by informal traders, but there are opportunities for investment in formal retail and e-commerce. Opportunities for investment in the sector include modern retail formats, supply chain management, and digitalization.</p>
        <p>Nigeria's retail and wholesale trade value is significant, with a large and growing consumer market. Shared value in this sector includes job creation, product availability, and consumer empowerment. Competitive advantage in this sector includes a large and growing consumer market, a need for formal retail, and a supportive regulatory environment.</p>
       "
    );

    public function trade(){
        return view('pages.topic', [
        'details' => $this->trade,
        ]);
    }

    public $trade = array(
        'title' => 'Trade',
        "description" => "
        <p>Nigeria is a significant player in international trade, with a diverse range of exports, including crude oil, agricultural products, and solid minerals. The country's strategic location and large market size make it an attractive destination for trade and investment. However, Nigeria's trade performance has been affected by several factors, including a lack of infrastructure, regulatory barriers, and corruption.</p>
        <p>The government has initiated several initiatives to address these challenges, including the establishment of free trade zones, the improvement of port infrastructure, and the implementation of trade facilitation measures. Opportunities for increased trade and investment exist in various sectors, including agriculture, manufacturing, and services.</p>
       "
    );

    public function insurance(){
        return view('pages.topic', [
        'details' => $this->insurance,
        ]);
    }

    public $insurance = array(
        'title' => 'Insurance',
        "description" => "
        <p>Nigeria's insurance sector is a significant contributor to the country's economic development, providing financial protection to businesses and individuals. The sector has shown significant growth in recent years, driven by increased awareness of the importance of insurance, regulatory reforms, and increased investment. However, the sector still faces several challenges, including low penetration rates, a lack of skilled professionals, and a limited product range</p>
        <p>The government has initiated several initiatives to address these challenges, including regulatory reforms, capacity building programs, and increased public awareness campaigns. Opportunities for increased investment and growth exist in various segments of the insurance market, including life insurance, health insurance, and microinsurance.</p>
       "
    );

    public function improving(){
        return view('pages.topic', [
        'details' => $this->improving,
        ]);
    }

    public $improving = array(
        'title' => 'Improving Government Services',
        "description" => "
        <p>Improving government services is critical to addressing the challenges in Nigeria's economic development, particularly in areas such as education, healthcare, and infrastructure. The government has initiated several programs to improve the quality and accessibility of these services, including the Universal Basic Education (UBE) program, the National Health Insurance Scheme (NHIS), and the National Integrated Infrastructure Master Plan (NIIMP). </p>
        <p>However, more needs to be done to address the significant gaps in these sectors, including increasing investment, improving governance, and promoting private sector participation.</p>
       "
    );

    public function professional(){
        return view('pages.topic', [
        'details' => $this->professional,
        ]);
    }


    public $professional = array(
        'title' => 'Professional Services',
        "description" => "
        <p>Nigeria's professional services sector, including legal, accounting, and consulting services, has significant potential for growth and diversification. The sector is highly competitive, with opportunities for increased investment and growth in various segments. However, the sector still faces several challenges, including a lack of regulatory framework, low capacity, and limited access to finance.</p>
        <p>The government has initiated several initiatives to address these challenges, including regulatory reforms and capacity-building programs. Opportunities for increased investment and growth exist in various segments of the professional services market, including legal services, accounting services, and consulting services.</p>
       "
    );

    public function diversity(){
        return view('pages.topic', [
        'details' => $this->diversity,
        ]);
    }


    public $diversity = array(
        'title' => 'Diversity, Equity, and Inclusion',
        "description" => "
        <p>Promoting diversity, equity, and inclusion is critical to Nigeria's economic development, particularly in addressing social and economic disparities. The government has initiated several programs to promote diversity, equity, and inclusion, including the National Gender Policy, the National Youth Policy, and the National Disability Policy.</p>
        <p>However, more needs to be done to address the significant gaps in these areas, including promoting women's participation in the workforce, addressing social and economic disparities, and promoting the rights of vulnerable groups.</p>
       "
    );


    public function corporate(){
        return view('pages.topic', [
        'details' => $this->corporate,
        ]);
    }

    public $corporate = array(
        'title' => 'Corporate Social Responsibility',
        "description" => "
        <p> Corporate social responsibility is an essential component of Nigeria's economic development, promoting responsible business practices, and social development. The government has initiated several initiatives to promote corporate social responsibility, including the Corporate Affairs Commission (CAC) and the Corporate Social Responsibility Policy. However, more needs to be done to promote responsible business practices, including addressing the culture of corruption, promoting ethical business practices, and improving governance.</p>
       "
    );

    public function climate(){
        return view('pages.topic', [
        'details' => $this->climate,
        ]);
    }

    public $climate = array(
        'title' => 'Climate Change',
        "description" => "
        <p> Climate change is a significant challenge to Nigeria's economic development, affecting various sectors, including agriculture, water resources, and energy. The government has initiated several initiatives to address the challenges of climate change, including the National Climate Change Policy and the National Renewable Energy Policy. However, more needs to be done to promote sustainable development, including promoting the use of renewable energy, promoting sustainable agriculture practices, and promoting environmental conservation.</p>
       "
    );

    public function immigration(){
        return view('pages.topic', [
        'details' => $this->immigration,
        ]);
    }


    public $immigration = array(
        'title' => 'Immigration',
        "description" => "
        <p>Immigration is a critical component of Nigeria's economic development, providing skilled labor and promoting cultural diversity. The government has initiated several programs to promote immigration, including the Nigerian Immigration Service (NIS) and the National Migration Policy. However, more needs to be done to address the challenges of immigration, including promoting the rights of migrants, addressing the causes of migration, and promoting economic opportunities in Nigeria.</p>
       "
    );

    public function business(){
        return view('pages.topic', [
        'details' => $this->business,
        ]);
    }

    public $business = array(
        'title' => 'Small Business',
        "description" => "
        <p>Small businesses are a critical component of Nigeria's economy, contributing to employment and economic growth. However, the sector still faces several challenges, including limited access to finance, a lack of infrastructure, and limited access to markets. The government has initiated several initiatives to address these challenges, including the Small and Medium Enterprises Development Agency (SMEDAN) and the Micro, Small and Medium Enterprises Development Fund (MSMEDF). Opportunities for increased investment and growth exist in various segments of the small business market, including agriculture, manufacturing, and services.</p>
       "
    );

    public function infrastructure(){
        return view('pages.topic', [
        'details' => $this->infrastructure,
        ]);
    }

    public $infrastructure = array(
        'title' => 'Infrastructure',
        "description" => "
        <p>Infrastructure development is critical to Nigeria's economic development, providing the necessary physical and social infrastructure to support economic growth. However, the country still faces significant infrastructure deficits, including a lack of transport infrastructure, energy infrastructure, and water and sanitation infrastructure. The government has initiated several programs to address these challenges, including the National Integrated Infrastructure Master Plan and the Presidential Infrastructure Development Fund. Opportunities for increased investment and growth exist in various segments of the infrastructure market, including transport infrastructure, energy infrastructure, and water and sanitation infrastructure.</p>
       "
    );

    public function employment(){
        return view('pages.topic', [
        'details' => $this->employment,
        ]);
    }


    public $employment = array(
        'title' => 'Employment',
        "description" => "
        <p>Employment is a critical component of Nigeria's economic development, providing opportunities for citizens to contribute to the country's growth and development. However, the country still faces significant unemployment and underemployment rates, particularly among youth and women. The government has initiated several programs to address these challenges, including the National Youth Policy and the National Gender Policy. Opportunities for increased investment and growth exist in various sectors, including agriculture, manufacturing, and services.</p>
       "
    );

    public function taxes(){
        return view('pages.topic', [
        'details' => $this->taxes,
        ]);
    }


    public $taxes = array(
        'title' => 'Taxes',
        "description" => "
        <p>Taxes are a critical source of revenue for Nigeria's government, providing funding for social services and infrastructure development. However, the country still faces challenges in tax administration and compliance, with low tax-to-GDP ratios and a high level of informal economic activity. The government has initiated several initiatives to address these challenges, including the Voluntary Assets and Income Declaration Scheme (VAIDS) and the Nigerian Tax and Fiscal Law Centre (NTFLC).</p>
       "
    );

    public function women(){
        return view('pages.topic', [
        'details' => $this->women,
        ]);
    }



    public $women = array(
        'title' => 'Women and youth',
        "description" => "
        <p>These are two critical groups that play a significant role in emerging economies such as Nigeria. In recent years, women and youth have made significant contributions to the Nigerian economy, leveraging their skills, creativity, and innovation to promote economic growth and national development. Women make up almost 50% of the Nigerian population and are significant contributors to the economy. According to the National Bureau of Statistics, women account for over 70% of the informal sector in Nigeria, which is a significant contributor to the country's GDP. Moreover, youth make up a significant proportion of the Nigerian population, with over 60% of the population under the age of 30. The youth population represents a significant opportunity for economic growth and national development. Women and youth in Nigeria has the potential to leverage their skills and creativity to drive innovation and entrepreneurship. Women and youth have been at the forefront of entrepreneurship in Nigeria, leveraging their skills and creativity to start businesses in various sectors, including technology, fashion, agriculture, creative industry and more. By promoting entrepreneurship, Nigeria can create job opportunities, promote economic growth, and foster a culture of innovation.</p>
        <p>Moreover, women and youth also have the potential to promote social and economic development in Nigeria. Through education and training, women and youth can acquire valuable skills and knowledge that can enable them to contribute to the development of their communities and the country as a whole. By promoting social and economic development, Nigeria can create opportunities for shared value that benefit the entire population. Women and youth also have significant potential to promote international trade and investment. Nigeria can leverage the skills and creativity of women and youth to produce and export high-quality products and services that can compete in the global market. By promoting international trade and investment, Nigeria can attract foreign investment, create job opportunities, and promote economic growth. Women and youth can also promote sustainable development and environmental sustainability. </p>
        <p>Through innovation and entrepreneurship, women and youth can develop solutions that promote sustainable development practices and reduce environmental degradation. By promoting sustainable development, Nigeria can create opportunities for shared value that benefit the entire population. Women and youth are critical groups that represent significant potential to drive innovation and promote global competitiveness. Through education and training, women and youth can acquire valuable skills and knowledge that can enable them to compete in the global market. By promoting education and training, Nigeria can attract foreign investment, create job opportunities, and promote economic growth. One of the competitive advantages of women and youth in Nigeria is their creativity, resilience, and adaptability. Women and youth have demonstrated the ability to overcome challenges and develop innovative solutions that address social and economic issues. However, women and youth still face significant barriers to economic participation, including limited access to finance, a lack of opportunities, and discriminatory cultural norms.</p>
        "
    );


    public function research(){
        return view('pages.topic', [
        'details' => $this->research,
        ]);
    }


    public $research = array(
        'title' => 'Research',
        "description" => "
        <p>The research industry is an essential tool for innovation, economic growth, and national development. In recent years, Nigeria has made significant progress in developing its research sector, leveraging its human capital, and natural resources to support innovation and promote economic growth. According to the National Bureau of Statistics, research and development expenditure in Nigeria increased by 10.5% in 2020, reaching N57.38 billion. This indicates an increasing focus on research and development by both the public and private sectors in Nigeria. In 2020, Nigeria ranked 22nd globally in the number of scientific publications, with over 23,000 articles published in international journals. Opportunities abound in the research sector with the potential to harness the country's vast natural resources to drive innovation and economic growth. Nigeria is rich in natural resources, including crude oil, natural gas, minerals, and agricultural products. Research can help to unlock the potential of these resources by developing innovative solutions that can maximize their value. Another opportunity is the potential to leverage the country's young and dynamic population to drive innovation. Nigeria has one of the youngest populations in the world, with over 60% of its population under the age of 30. This presents a significant opportunity for the research sector to develop innovative solutions that can meet the needs of a young and dynamic population.</p>
        <p>Nigeria can leverage its research capabilities to drive economic growth and promote international trade, develop innovative solutions that can address global challenges such as climate change, healthcare, and energy. By promoting research and innovation, Nigeria can attract foreign investment and promote international trade in research and development.</p>
       <p>To promote social and economic development through research and innovation, Nigeria can develop solutions that can address social challenges such as poverty, unemployment, and inequality. The promotion of research and innovation can create opportunities for social and economic development that can benefit the entire population and promote global competitiveness by developing solutions that can compete in the global market, attracting foreign investment and promoting international trade. One of the competitive advantages of Nigeria's research sector is its human capital. Nigeria has a large pool of talented and educated professionals who can contribute to the development of the research sector. Moreover, the Nigerian government has implemented policies aimed at promoting education and research, including the establishment of research centers and funding for research programs.</p>
        "
    );








}
