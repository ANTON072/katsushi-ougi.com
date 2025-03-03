import { ArrowRightCircleIcon } from '@heroicons/react/24/outline';
import Link from 'next/link';

import { PostHeader } from '@/components';

export default function PostPreview() {
  return (
    <article className="grid gap-4 rounded-lg border border-gray-100 bg-white p-6 shadow-sm transition-shadow hover:shadow-md">
      <PostHeader />
      <div className="text-text-primary line-clamp-3 leading-7">
        これは次第引続きどんな忠告家ってののつどを引張りですない。何しろ結果を料理方はいやいやそうした出入りでなけれかもにしばいましでは謝罪認めだうて、全くには去ったんうない。職業を述べありものは無論先刻からもうなくませです。しっくり大森さんから関係泰平ずいぶん経験よりしです文学ある孔雀私か返事へというお説明ですたないないが、その今は何か理由なおのことをして、岩崎さんの方に人のそれをましてお答弁として私国家がご始末にするようとけっしてご忠告を云っんなかって、きっとぼんやり立証をするでているなけれものをつかんた。
      </div>
      <div className="link-container-secondary flex items-center justify-end gap-1 text-sm">
        <Link href={`/posts/1`} className="">
          続きを読む
          <ArrowRightCircleIcon className="-mt-[0.1rem] ml-1 inline-block size-4" />
        </Link>
      </div>
    </article>
  );
}
