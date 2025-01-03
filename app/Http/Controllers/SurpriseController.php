<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SurpriseController extends Controller
{
    public function quiz()
    {
        return view('surprise');
    }

    public function index()
    {
        $PDKT = [
            ['src' => 'image/1/1.jpg', 'caption' => 'Ini pas kamu ulang tahun'],
            ['src' => 'image/1/2.jpg', 'caption' => 'Bocil bobo'],
            ['src' => 'image/1/3.jpg', 'caption' => 'Dari belakang cantik'],
            ['src' => 'image/1/4.jpg', 'caption' => 'ini First pap ke aku niii'],
            ['src' => 'image/1/5.jpg', 'caption' => 'cantik bener bu'],
            ['src' => 'image/1/6.jpg', 'caption' => 'gemesh deh'],
            ['src' => 'image/1/7.jpg', 'caption' => 'aduduuuh gakuat aku'],
            ['src' => 'image/1/8.jpg', 'caption' => 'bocil menjadi bolang di jakarta'],
            ['src' => 'image/1/9.jpg', 'caption' => 'jempol duluu'],
            ['src' => 'image/1/10.jpg', 'caption' => 'jempol lagii'],
            ['src' => 'image/1/11.jpg', 'caption' => 'jempol lagii 2'],
            ['src' => 'image/1/12.jpg', 'caption' => 'masyaallah pacarin boleh ga siii???'],
            ['src' => 'image/1/13.jpg', 'caption' => 'ni si paling badminton'],
            ['src' => 'image/1/14.jpg', 'caption' => 'manis banget, permennya'],
            ['src' => 'image/1/15.jpg', 'caption' => 'ini sigma dinda dengan dagunya'],
            ['src' => 'image/1/16.jpg', 'caption' => 'assalamualaikum ukhti'],
            ['src' => 'image/1/17.jpg', 'caption' => 'aduh takut dikokop'],
            ['src' => 'image/1/18.jpg', 'caption' => 'jadi kakak kakak undip di sekolah dulu'],
            ['src' => 'image/1/19.jpg', 'caption' => 'jempol lagii 3 cantik beneer'],
            ['src' => 'image/1/20.jpeg', 'caption' => 'our First photobooth'],
            ['src' => 'image/1/21.jpg', 'caption' => 'mbak mbak jawa ini sungguh memikat deh'],
            ['src' => 'image/1/22.jpg', 'caption' => 'nyoblos dulu boss'],
            ['src' => 'image/1/23.jpg', 'caption' => 'ini ni kebiasaan setengah muka']
        ];

        $Jadian =[
            ['src' => 'image/2/2.jpg', 'caption' => 'jadi guguk aja cantik apa lagi jadi pacar aku ya'],
            ['src' => 'image/2/3.jpg', 'caption' => 'cantik banget ya allah pacar akuu'],
            ['src' => 'image/2/4.jpg', 'caption' => 'di pap cantik begini gimana ga meleleh aku'],
            ['src' => 'image/2/5.jpg', 'caption' => 'anjay kayak emo girl'],
            ['src' => 'image/2/6.jpg', 'caption' => 'pipinya gigit boleeh?'],
            ['src' => 'image/2/7.jpg', 'caption' => '🤩'],
            ['src' => 'image/2/8.jpg', 'caption' => 'jadi ibu ibu sw bisa ni kamu sayang'],
            ['src' => 'image/2/9.jpg', 'caption' => 'di liat liat cantik juga ni cewek'],
            ['src' => 'image/2/10.jpg', 'caption' => 'dari bawah cantik'],
            ['src' => 'image/2/11.jpg', 'caption' => 'jadi ukhti gini cantik'],
            ['src' => 'image/2/12.jpg', 'caption' => 'bobo 2'],
            ['src' => 'image/2/13.jpg', 'caption' => 'utututu gemehnya bociiil'],
            ['src' => 'image/2/14.jpg', 'caption' => 'bobo 3']
        ];

        $Main =[
            ['src' => 'image/3/1.jpg', 'caption' => 'nemenin kamu lagi main bareng temen kamu'],
            ['src' => 'image/3/2.jpg', 'caption' => 'gemeh banget ini'],
            ['src' => 'image/3/3.jpg', 'caption' => 'masyaallah nikah yuk dek'],
            ['src' => 'image/3/4.jpg', 'caption' => 'iya ampun iyaa gakuat akuu'],
            ['src' => 'image/3/5.jpg', 'caption' => 'minal aidin wal faidin mohon doa dan restunya papa dan mama din din'],
            ['src' => 'image/3/6.jpg', 'caption' => 'loh heh 🤔'],
            ['src' => 'image/3/7.jpg', 'caption' => 'hihihihihi ternyata pacar aku toh'],
            ['src' => 'image/3/8.jpg', 'caption' => 'stop pipi kamu mau tumpah'],
            ['src' => 'image/3/9.jpg', 'caption' => 'mata kamu cantik banget sayaaang 🫠']
        ];

        $konser =[
            ['src' => 'image/4/1.jpg', 'caption' => 'koser pertama banget ni???'],
            ['src' => 'image/4/2.jpg', 'caption' => 'koser kehujanan'],
            ['src' => 'image/4/3.jpg', 'caption' => 'gemeshnyaaa'],
            ['src' => 'image/4/4.jpg', 'caption' => 'fix besok nikah .'],
            ['src' => 'image/4/5.jpg', 'caption' => 'bocil cina'],
            ['src' => 'image/4/6.jpg', 'caption' => 'kak nikahin aku kaaak'],
            ['src' => 'image/4/7.jpg', 'caption' => 'gemeessh bangeeeeet'],
            ['src' => 'image/4/8.jpg', 'caption' => 'fix sekaran otw ngelamar']
        ];

        $love =[
            ['src' => 'image/5/2.jpg', 'caption' => 'winglok time'],
            ['src' => 'image/5/1.jpg', 'caption' => 'cantik beneeer'],
            ['src' => 'image/5/3.jpg', 'caption' => 'dimasakin istri pulang kerja 😎'],
            ['src' => 'image/5/4.jpg', 'caption' => 'melet mulu aku gigit ni'],
            ['src' => 'image/5/5.jpeg', 'caption' => 'hP TEROOOSSS'],
            ['src' => 'image/5/6.jpg', 'caption' => 'pipinya dijagain nanti jatoooh 🫠'],
            ['src' => 'image/5/7.jpg', 'caption' => 'gakuat abang dek 🥵'],
            ['src' => 'image/5/8.jpg', 'caption' => 'aduh dikedipin yang begini enaknya diapain ya'],
            ['src' => 'image/5/9.jpg', 'caption' => 'melet lagi ni aku sentil kali ya'],
            ['src' => 'image/5/10.jpg', 'caption' => 'nah pinter, tapi itu pipinya kenapa mau jatoh??'],
            ['src' => 'image/5/11.jpg', 'caption' => 'aduh duuuh, sini abang nafkahin dek'],
            ['src' => 'image/5/12.jpg', 'caption' => 'sedihnyaaa 🥲'],
            ['src' => 'image/5/13.jpg', 'caption' => 'SIAPA ITU YANG BERANI NYENDER 😡']
        ];

        $cantik =[
            ['src' => 'image/6/1.jpg', 'caption' => 'sumpah deh sayang kamu cantik bangeet'],
            ['src' => 'image/6/2.jpg', 'caption' => 'cantik banget siiiiih'],
            ['src' => 'image/6/3.jpg', 'caption' => 'aduh kedipin lagi ga tu'],
            ['src' => 'image/6/4.jpg', 'caption' => '🫣'],
            ['src' => 'image/6/5.jpg', 'caption' => 'ampun bu guyu ampuuun'],
            ['src' => 'image/6/6.jpg', 'caption' => 'melet lagi tak totok kamu'],
            ['src' => 'image/6/7.jpg', 'caption' => 'udah dibilangin juga itu pipinya jagain'],
            ['src' => 'image/6/8.jpg', 'caption' => 'photobooth gemaaash'],
            ['src' => 'image/6/9.jpg', 'caption' => 'rambut kami cantik banget siiiih'],
            ['src' => 'image/6/10.jpg', 'caption' => 'harus dirangkul soalnya ada yang bajunya kembaran'],
            ['src' => 'image/6/11.jpg', 'caption' => 'wiih ada pernyaaa'],
            ['src' => 'image/6/12.jpg', 'caption' => 'panas kaaan, main jauh jauh siiih'],
            ['src' => 'image/6/13.jpg', 'caption' => 'Cute baby bocil'],
            ['src' => 'image/6/14.jpg', 'caption' => 'eskim timee'],
            ['src' => 'image/6/15.jpg', 'caption' => 'apa ga seneng di kasih pap begini'],
            ['src' => 'image/6/16.jpg', 'caption' => 'orang ga liatin acaranya malah liat panitianya ini mah'],
            ['src' => 'image/6/17.jpg', 'caption' => 'si cantik yang rajin prokeran'],
            ['src' => 'image/6/18.jpg', 'caption' => 'dewi dari mana inii??'],
            ['src' => 'image/6/19.jpg', 'caption' => 'gemesh naaaa'],
        ];

        $mine =[
            ['src' => 'image/7/1.jpg', 'caption' => 'gemesnyaa'],
            ['src' => 'image/7/2.jpg', 'caption' => 'cantik bener ni orang, untung pacar aku ya'],
            ['src' => 'image/7/3.jpg', 'caption' => 'manis bangeeet'],
            ['src' => 'image/7/4.jpg', 'caption' => 'boleh cicip?'],
            ['src' => 'image/7/5.jpg', 'caption' => 'cantik bangeeeeet'],
            ['src' => 'image/7/6.jpg', 'caption' => 'lucunyaa bocil akuu'],
            ['src' => 'image/7/7.jpg', 'caption' => 'cantik banget deh sumpah babyy'],
            ['src' => 'image/7/8.jpg', 'caption' => 'ni diaa my princess'],
            ['src' => 'image/7/9.jpg', 'caption' => 'segemash koala'],
            ['src' => 'image/7/10.jpg', 'caption' => 'secantik mawar'],
            ['src' => 'image/7/11.jpg', 'caption' => 'secantik bulan'],
            ['src' => 'image/7/12.jpg', 'caption' => 'gas dipacariin'],
            ['src' => 'image/7/13.jpg', 'caption' => 'sabar bu makannya'],
            ['src' => 'image/7/14.jpg', 'caption' => 'buset dah laper bu?'],
            ['src' => 'image/7/15.jpg', 'caption' => 'ramen timeee'],
            ['src' => 'image/7/16.jpg', 'caption' => 'bobo 4'],
            ['src' => 'image/7/17.jpg', 'caption' => 'pipinyaaa iiih jagaiaiin'],
            ['src' => 'image/7/18.jpg', 'caption' => 'cantiknyooo'],
            ['src' => 'image/7/19.jpg', 'caption' => 'enyum roblox']
        ];

        $sabar =[
            ['src' => 'image/8/1.jpg', 'caption' => 'gelang baruuu'],
            ['src' => 'image/8/2.jpg', 'caption' => 'si cantik penjajah solo'],
            ['src' => 'image/8/3.jpg', 'caption' => 'per pertama kali ditemukan didunia ini'],
            ['src' => 'image/8/4.jpg', 'caption' => 'ya ampuuun cantik banget siiih'],
            ['src' => 'image/8/5.jpg', 'caption' => 'pake baju aku makin cantik aja'],
            ['src' => 'image/8/6.jpg', 'caption' => 'dikedipin mulu, hampir copot jantung ini'],
            ['src' => 'image/8/7.jpg', 'caption' => 'MELET LAGIIIIIII'],
            ['src' => 'image/8/8.jpg', 'caption' => 'gemesh banget siih, warewolfnya mana red hoood'],
            ['src' => 'image/8/9.jpg', 'caption' => 'aku cium juga ni'],
            ['src' => 'image/8/10.jpg', 'caption' => 'First trip perjalanan jauh'],
            ['src' => 'image/8/11.jpg', 'caption' => 'busyet dah cakep beneeer'],
        ];
    
        return view('index', compact('PDKT', 'Jadian','Main', 'konser', 'love', 'cantik', 'mine', 'sabar'));
    }
    

    public function wish()
    {
        return view('Flower');
    }

    public function unlock(Request $request)
    {
        $validated = $request->validate([
            'password' => 'required|string|max:255'
        ]);

        if (strtolower(trim($validated['password'])) === 'ittakestwo') {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}