<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SponsorsController extends Controller
{
    /**
     * Display the sponsors page
     */
    public function index()
    {
        $sponsors = $this->getSponsors();
        
        return view('pages.sponsors.index', compact('sponsors'));
    }

    /**
     * Get sponsors data
     */
    protected function getSponsors()
    {
        return [
            'diamond' => [
                [
                    'name' => 'Astellas',
                    'logo' => 'images/ntt/Astellas_Kim_cuong_1.png',
                    'website' => '#',
                    'tagline_vi' => 'Nhà tài trợ Kim cương',
                    'tagline_en' => 'Diamond Sponsor',
                    'youtube_video' => 'https://common.mcms.one/assets/hieubt/Management-of-Immunosuppressive-Drugs-with-a-Narrow-Therapeutic-Range-From-Guidelines-to-Clinical-Practice.mp4', // Example: 'dQw4w9WgXcQ' for video ID or full URL
                    'buttons' => [
                        [
                            'text_vi' => 'Giới thiệu',
                            'text_en' => 'Introduction',
                            'url' => 'sponsors/Introduction Astellas.pdf'
                        ]
                    ]
                ]
            ],
            'platinum' => [
                [
                    'name' => 'Novartis',
                    'logo' => 'images/ntt/Novartis_bach_kim_2.png',
                    'website' => '#',
                    'tagline_vi' => 'Nhà tài trợ Bạch kim',
                    'tagline_en' => 'Platinum Sponsor',
                    'youtube_video' => null,
                    'buttons' => []
                ],
                [
                    'name' => 'Johnson & Johnson',
                    'logo' => 'images/ntt/J&J_bach_kim_3.png',
                    'website' => '#',
                    'tagline_vi' => 'Nhà tài trợ Bạch kim',
                    'tagline_en' => 'Platinum Sponsor',
                    'youtube_video' => null,
                    'buttons' => []
                ]
            ],
            'gold' => [
                [
                    'name' => 'Sandoz',
                    'logo' => 'images/ntt/Sandoz_vang_4.png',
                    'website' => '#',
                    'tagline_vi' => 'Nhà tài trợ Vàng',
                    'tagline_en' => 'Gold Sponsor',
                    'youtube_video' => null,
                    'buttons' => []
                ],
                [
                    'name' => 'Teva (Gigamed)',
                    'logo' => 'images/ntt/Teva_vang_5.png',
                    'website' => '#',
                    'tagline_vi' => 'Nhà tài trợ Vàng',
                    'tagline_en' => 'Gold Sponsor',
                    'youtube_video' => null,
                    'buttons' => [
                        [
                            'text_vi' => 'Giới thiệu',
                            'text_en' => 'Introduction',
                            'url' => 'sponsors/Introduction Teva.pdf'
                        ]
                    ]
                ]
            ],
            'silver' => [
                [
                    'name' => 'Pfizer',
                    'logo' => 'images/ntt/Pfizer_bac_6.png',
                    'website' => '#',
                    'tagline_vi' => 'Nhà tài trợ Bạc',
                    'tagline_en' => 'Silver Sponsor',
                    'youtube_video' => null,
                    'buttons' => [
                        [
                            'text_vi' => 'Giới thiệu',
                            'text_en' => 'Introduction',
                            'url' => 'sponsors/Introduction Pfizer.pdf'
                        ]
                    ]
                ]
            ],
            'bronze' => [
                [
                    'name' => 'B Braun',
                    'logo' => 'images/ntt/B.Braun_dong_7.png',
                    'website' => '#',
                    'tagline_vi' => 'Nhà tài trợ Đồng',
                    'tagline_en' => 'Bronze Sponsor',
                    'youtube_video' => null,
                    'buttons' => [
                        [
                            'text_vi' => 'Giới thiệu',
                            'text_en' => 'Introduction',
                            'url' => 'sponsors/Introduction B Braun.pdf'
                        ]
                    ]
                ],
                [
                    'name' => 'Baxter',
                    'logo' => 'images/ntt/Baxter_dong_8.png',
                    'website' => '#',
                    'tagline_vi' => 'Nhà tài trợ Đồng',
                    'tagline_en' => 'Bronze Sponsor',
                    'youtube_video' => null,
                    'buttons' => [
                        [
                            'text_vi' => 'Giới thiệu',
                            'text_en' => 'Introduction',
                            'url' => 'sponsors/Introduction Baxter.pdf'
                        ]
                    ]
                ],
                [
                    'name' => 'MSD',
                    'logo' => 'images/ntt/MSD_dong_9.png',
                    'website' => '#',
                    'tagline_vi' => 'Nhà tài trợ Đồng',
                    'tagline_en' => 'Bronze Sponsor',
                    'youtube_video' => null,
                    'buttons' => [
                        [
                            'text_vi' => 'Giới thiệu',
                            'text_en' => 'Introduction',
                            'url' => 'sponsors/Introduction MSD.pdf'
                        ]
                    ]
                ],
                [
                    'name' => 'Kabi',
                    'logo' => 'images/ntt/Kabi_dong_10.png',
                    'website' => '#',
                    'tagline_vi' => 'Nhà tài trợ Đồng',
                    'tagline_en' => 'Bronze Sponsor',
                    'youtube_video' => null,
                    'buttons' => []
                ],
                [
                    'name' => 'Gravitas',
                    'logo' => 'images/ntt/Gravitas_dong_11.png',
                    'website' => '#',
                    'tagline_vi' => 'Nhà tài trợ Đồng',
                    'tagline_en' => 'Bronze Sponsor',
                    'youtube_video' => null,
                    'buttons' => [
                        [
                            'text_vi' => 'Giới thiệu',
                            'text_en' => 'Introduction',
                            'url' => 'sponsors/Introduction Gravitas.pdf'
                        ]
                    ]
                ],
                [
                    'name' => 'Zuelligpharma (Abbvie)',
                    'logo' => 'images/ntt/Zuelligpharma_dong_12.png',
                    'website' => '#',
                    'tagline_vi' => 'Nhà tài trợ Đồng',
                    'tagline_en' => 'Bronze Sponsor',
                    'youtube_video' => null,
                    'buttons' => [
                        [
                            'text_vi' => 'Giới thiệu',
                            'text_en' => 'Introduction',
                            'url' => 'sponsors/Introduction Zuelligpharma.pdf'
                        ]
                    ]
                ],
                [
                    'name' => 'AstraZeneca',
                    'logo' => 'images/ntt/AZ_dong_13.png',
                    'website' => '#',
                    'tagline_vi' => 'Nhà tài trợ Đồng',
                    'tagline_en' => 'Bronze Sponsor',
                    'youtube_video' => null,
                    'buttons' => []
                ]
            ],
            'co_sponsor' => [
                [
                    'name' => 'Vạn Niên',
                    'logo' => 'images/ntt/Van_nien_tai_tro_14.png',
                    'website' => '#',
                    'tagline_vi' => 'Đồng tài trợ',
                    'tagline_en' => 'Co-Sponsor',
                    'youtube_video' => null,
                    'buttons' => [
                        [
                            'text_vi' => 'Giới thiệu',
                            'text_en' => 'Introduction',
                            'url' => 'sponsors/Introduction Vạn Niên.pdf'
                        ]
                    ]
                ],
                [
                    'name' => 'Abbott',
                    'logo' => 'images/ntt/Abbott_tai_tro_15.png',
                    'website' => '#',
                    'tagline_vi' => 'Đồng tài trợ',
                    'tagline_en' => 'Co-Sponsor',
                    'youtube_video' => null,
                    'buttons' => [
                        [
                            'text_vi' => 'Giới thiệu',
                            'text_en' => 'Introduction',
                            'url' => 'sponsors/Introduction Abbott.pdf'
                        ]
                    ]
                ],
                [
                    'name' => 'Fresenius Kabi',
                    'logo' => 'images/ntt/Kabi_tai_tro_16.png',
                    'website' => '#',
                    'tagline_vi' => 'Đồng tài trợ',
                    'tagline_en' => 'Co-Sponsor',
                    'youtube_video' => null,
                    'buttons' => []
                ],
                [
                    'name' => 'Việt Pháp',
                    'logo' => 'images/ntt/Viet_Phap_tai_tro_17.png',
                    'website' => '#',
                    'tagline_vi' => 'Đồng tài trợ',
                    'tagline_en' => 'Co-Sponsor',
                    'youtube_video' => null,
                    'buttons' => []
                ],
                [
                    'name' => 'Sanofi',
                    'logo' => 'images/ntt/SANOFI_tai_tro_18.png',
                    'website' => '#',
                    'tagline_vi' => 'Đồng tài trợ',
                    'tagline_en' => 'Co-Sponsor',
                    'youtube_video' => null,
                    'buttons' => []
                ],
                [
                    'name' => 'Philips',
                    'logo' => 'images/ntt/COMED_tai_tro_20.png',
                    'website' => '#',
                    'tagline_vi' => 'Đồng tài trợ',
                    'tagline_en' => 'Co-Sponsor',
                    'youtube_video' => null,
                    'buttons' => []
                ]
            ]
        ];
    }

    /**
     * Get sponsors data (for AJAX requests)
     */
    public function getSponsorsApi(Request $request)
    {
        $sponsors = $this->getSponsors();
        
        return response()->json([
            'sponsors' => $sponsors,
            'message' => 'Sponsors data retrieved successfully'
        ]);
    }
}
