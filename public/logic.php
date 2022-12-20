<?php

function getCity()
{
    $cityArray = [
        "city_103", "city_40", "city_21", "city_115", "city_162", "city_176", "city_160",
        "city_46", "city_61", "city_114", "city_13", "city_159", "city_102", "city_67", "city_100",
        "city_16", "city_71", "city_104", "city_64", "city_101", "city_83", "city_105", "city_73",
        "city_75", "city_41", "city_11", "city_93", "city_90", "city_36", "city_20", "city_57",
        "city_152", "city_19", "city_65", "city_74", "city_173", "city_136", "city_98", "city_97",
        "city_50", "city_138", "city_82", "city_157", "city_89", "city_150", "city_70", "city_175",
        "city_94", "city_28", "city_59", "city_165", "city_145", "city_142", "city_26", "city_12",
        "city_37", "city_43", "city_116", "city_23", "city_99", "city_149", "city_10", "city_45",
        "city_80", "city_128", "city_158", "city_123", "city_7", "city_72", "city_106", "city_143",
        "city_78", "city_109", "city_24", "city_134", "city_48", "city_144", "city_91", "city_146",
        "city_133", "city_126", "city_118", "city_9", "city_167", "city_27", "city_84", "city_54",
        "city_39", "city_79", "city_76", "city_77", "city_81", "city_131", "city_44", "city_117",
        "city_155", "city_33", "city_141", "city_127", "city_62", "city_53", "city_25", "city_2",
        "city_69", "city_120", "city_111", "city_30", "city_1", "city_140", "city_179", "city_55",
        "city_14", "city_42", "city_107", "city_18", "city_139", "city_180", "city_166", "city_121",
        "city_129", "city_8", "city_31", "city_171"
    ];

    return $cityArray;
}



function getEnrollment(){
    $enrollmentArray = [
        "no_enrollment", "Full time course", "Part time course"
    ];
    return $enrollmentArray;
}

function getEduLevel(){
    $edu_levelArray = [
        "Graduate", "Masters", "High School", "Phd", "Primary School"
    ];
    return $edu_levelArray;
}

function getMajor(){
    $majorArray = [
        "STEM", "Business Degree", "Arts", "Humanities", "No Major", "Other"
    ];
    return $majorArray;
}

function getExperience(){
    $experienceArray = [
        "<1", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16",
        "17", "18", "19", "20", ">20"
    ];
    return $experienceArray;
}

function getCompanyT(){
    $company_tArray = [
        "Pvt Ltd", "Funded Startup", "Early Stage Startup", "NGO", "Public Sector", "Other"
    ];
    return $company_tArray;
}

function getCompanyS(){
    $company_sArray = [
        "<10", "10-49", "50-99", "100-500", "500-999", "1000-4999", "5000-9999", "10000+"
    ];
    return $company_sArray;
}

function getLastJob(){
    $last_jobArray = [
        "never", "1", "2", "3", "4", ">4"
    ];
    return $last_jobArray;
}



?>